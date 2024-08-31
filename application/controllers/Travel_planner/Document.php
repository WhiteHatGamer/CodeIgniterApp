<?php

use FontLib\Table\Type\post;

    defined("BASEPATH") OR exit("Direct access not Allowed");

    class Document extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('document_model');
            $this->load->library(array('session','table'));
        }

        public function index(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }

            if($this->input->server('REQUEST_METHOD') == 'POST'){

                foreach($_POST as $key => $value){
                    // User Confirmed Delete
                    if($key == 'cancel'){
                        break;

                    }

                    // User Confirmed Delete
                    if($key == 'confirmDlt'){
                        if($this->document_model->deleteImage($_POST['confirmDlt'])){
                            $this->load->view('Travel_planner\inc\deleted');
                        }else{
                            $data['errorTitle'] = "Couldn't Delete Data";
                            $data['warningHtml'] = '<button class="btn btn-info" onClick="window.location.href=window.location.href">Refresh Page to Try Again</button>';
                            $this->load->view('Travel_planner\inc\danger');
                        }

                        break;
                    }
                    
                    if(stripos($value, 'btn') == 0){
                        $data['value'] = $value;
                        $this->load->view('Travel_planner\inc\confirm', $data);

                        break;
                    }

                }

            }

            $data['result'] = $this->document_model->getImages();

            $this->load->view("Travel_planner/inc/header");
            if($data['result']){

                $this->load->view("Travel_planner/Dashboard/Document/gallery", $data);
            }else{
                $this->load->view("Travel_planner/inc/no_data_doc");

            }
            $this->load->view("Travel_planner/inc/footer");
        }
        
        public function upload(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }

            if($this->input->post('upload')){

                // Upload Form  Submitted
                $config['upload_path']      = FCPATH."assets/uploads";
                $config['allowed_types']    = 'gif|jpg|jpeg|png|bmp|webp|tiff|x-icon';

                $this->load->library('upload', $config);
                
                // Storing Image array as Separate
                $count = count($_FILES['images']['name']);
                for ($i=0;$i<$count;$i++) {
                    $_FILES['image'.$i]['name'] = $_FILES['images']['name'][$i];
                    $_FILES['image'.$i]['full_path'] = $_FILES['images']['full_path'][$i];
                    $_FILES['image'.$i]['type'] = $_FILES['images']['type'][$i];
                    $_FILES['image'.$i]['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                    $_FILES['image'.$i]['error'] = $_FILES['images']['error'][$i];
                    $_FILES['image'.$i]['size'] = $_FILES['images']['size'][$i];
                }
                $source = array();
                for ($i=0; $i<$count; $i++){

                    if($this->upload->do_upload('image'.$i)){
                        // Saving File into Database
                        $source[$i]['path'] = $this->upload->data()['full_path'];
                        $source[$i]['type'] = $_FILES['image'.$i]['type'];

                    }
                }

                // Uploading all source File to Database and showing Toast
                if($this->document_model->uploadImages($source)){
                    $this->load->view("Travel_planner/inc/saved");
                }
                
            }
            
            $this->load->view("Travel_planner/inc/header");
            $this->load->view("Travel_planner/Dashboard/Document/Upload");
            $this->load->view("Travel_planner/inc/footer");
        }

        public function enlarge(){

            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }

            $email = $this->session->email;
            $id = $_GET['id'];
            $data = @$this->document_model->getImage(array('id'=>$id, 'user_id'=>$email))[0];
            if($data){

                $this->load->view("Travel_planner/Dashboard/Document/enlarge", $data);
            }else{
                show_404();
            }
        }
        public function edit_image(){
        
            // Checking If User is Logged In
            if(!$this->session->email){
            redirect(adminTravelPlannerUrl());
                return;
            }
            
            $data = array();
            
            if($this->input->post()){
                if(@$_POST["edit"]){
                    $data = $this->document_model->getImage(array("id"=>$_POST["edit"]))[0];

                if(isset($_FILES["image"])){
                    // Upload Form  Submitted
                    $config['upload_path']      = FCPATH."assets/uploads";
                    $config['allowed_types']    = 'gif|jpg|jpeg|png|bmp|webp|tiff|x-icon';

                    $this->load->library('upload', $config);

                    // Checking if File Already Exists
                    if(file_exists($config['upload_path'].'/'.$_FILES["image"]['name'])){
                        $data["image"] = '\\CodeIgniterApp\\'.explode(FCPATH,str_replace('/', '\\',$config['upload_path'].'/'.$_FILES["image"]['name']))[1];
                    }else{

                        if($this->upload->do_upload('image')){
                            // Saving File into Database
                            $data["image"] = '\\CodeIgniterApp\\'.explode(FCPATH,str_replace('/', '\\',$this->upload->data()['full_path']))[1];
    
                        }
                    }
                }
            }

            
            $this->load->view("Travel_planner/inc/header");
            $this->load->view('Travel_planner/dashboard/editImage', $data);
            $this->load->view("Travel_planner/inc/footer");
        }
    }
