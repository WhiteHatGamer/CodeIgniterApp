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

        
        public function edit_image_merge(){
            // Checking If User is Logged In
            if(!$this->session->email){
            redirect(adminTravelPlannerUrl());
                return;
            }

            if($this->input->method() == "post"){
                // Code for Merging the image and Download Directly
                $selected_img_path = FCPATH.str_replace("\CodeIgniterApp\\","",base64_decode($_POST['selected-img']));
                $image_path = FCPATH.str_replace("\CodeIgniterApp","",base64_decode($_POST['image']));
                $x_pos = $_POST['x-pos'];
                $y_pos = $_POST['y-pos'];
                
                $selected_img = imagecreatefromstring(file_get_contents($selected_img_path));
                $image = imagecreatefromstring(file_get_contents($image_path));
                
                list($width, $height) = getimagesize($image_path);

                if(isset($_POST['custom-height']) && @$_POST['custom-height']!=$height){

                    // Resizing Image based on Slider
                    $oldW = imagesx($image);
                    $oldH = imagesy($image);
                    $aspectRatio = $oldW/$oldH;
                    $height = $_POST["custom-height"];
                    $width = (int)$aspectRatio*$height;
                    $temp = imagecreatetruecolor($width, $height);
                    imagealphablending($temp, false);
                    imagesavealpha($temp, true);
                    imagecopyresampled($temp, $image, 0, 0, 0, 0, $width, $height, $oldW, $oldH);
                    $image = $temp;

                }

                // imagecopymerge_alpha
                $cut = imagecreatetruecolor($width, $height);
                imagecopy($cut, $selected_img, 0, 0, $x_pos, $y_pos, $width, $height);
                imagecopy($cut, $image, 0, 0, 0, 0, $width, $height);
                imagecopymerge($selected_img, $cut, $x_pos, $y_pos, 0, 0, $width, $height, 100);

                $merged_img_path = str_replace(".","_merged.",$selected_img_path);
                $merged_img_path = str_replace(explode("_merged.",$merged_img_path)[1],"png", $merged_img_path);
                imagepng($selected_img, $merged_img_path);

                //File Download Code
                if($_POST['type'] == "image"){

                    // Set the appropriate headers for the file download
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="' . basename($merged_img_path) . '"');
                    header('Content-Length: ' . filesize($merged_img_path));
                
                    // Read and output the file content
                    readfile($merged_img_path);
                }elseif($_POST['type'] == "pdf"){
                    // FPDF Instance
                    $pdf = new FPDF('P', 'mm', 'A4');
                    $pdf->AddPage();
                    list($width, $height) = getimagesize($merged_img_path);

                    $dpi = 300;
                    // Converting to MM from px
                    $width_mm = $width * 25.4 / $dpi;
                    $height_mm = $height * 25.4 / $dpi;

                    // Get the Generated PDF's page Sizes
                    $page_width = $pdf->GetPageWidth();
                    $page_height = $pdf->GetPageHeight();

                    // Calculate the scaling factor to fit the image within the page dimensions
                    $scale_factor = min($page_width / $width_mm, $page_height / $height_mm);

                    // Scaled height and Width
                    $scaled_width = $width_mm * $scale_factor;
                    $scaled_height = $height_mm * $scale_factor;

                    // Center the image on the page
                    $x = ($page_width - $scaled_width) / 2;
                    $y = ($page_height - $scaled_height) / 2;

                    $pdf->Image($merged_img_path, $x, $y, $scaled_width, $scaled_height);
                    date_default_timezone_set("Asia/Dubai");
                    $merged_img_basename = explode('.',basename($merged_img_path))[0].date("_y-m-d_h-m-s");
                    $pdf->Output('D', $merged_img_basename.".pdf");

                }

                // Freeing Memories
                imagedestroy($selected_img);
                imagedestroy($image);
                imagedestroy($cut);

            }else{
                redirect("Travel_planner/document/edit_image");
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

                }elseif(isset($_FILES["selected-img"])){
                    
                    // Upload Form  Submitted
                    $config['upload_path']      = FCPATH."assets/uploads";
                    $config['allowed_types']    = 'gif|jpg|jpeg|png|bmp|webp|tiff|x-icon|pdf';

                    $this->load->library('upload', $config);
                    
                    
                    if($_FILES["selected-img"]["type"] == "application/pdf"){
                        
                        $pdfPath = $config['upload_path'].'/'.$_FILES["selected-img"]['name'];

                        // Checking if File Already Exists
                        if(file_exists($pdfPath)){
                            // File Exists
                            $data["selected_img"] = $pdfPath;
                        }else{
                            // File Doesn't Exists
                            if($this->upload->do_upload('selected-img')){
                                // Saving File into Database
                                $data["selected_img"] = str_replace('/', '\\',$this->upload->data()['full_path']);
                                
                            }
                        }

                        // Imagick Instance
                        $img = new Imagick();
                        $img->setResolution(210,297);
                        $img->readimage($data["selected_img"]);
                        $img = $img->mergeImageLayers(Imagick::LAYERMETHOD_FLATTEN);
                        $img->setImageFormat('png');
                        
                        $fileName = str_replace("pdf", "png", $_FILES["selected-img"]['name']);
                        $filePath = $config['upload_path'].'/'.$fileName;
                        $filePathUrl = '\\CodeIgniterApp\\'.explode(FCPATH,str_replace('/', '\\',$filePath))[1];

                        // Checking if File Already Exists
                        if(file_exists($filePath)){
                            $data["selected_img"] = $filePathUrl;
                        }else{
                            
                            $img->writeImage($filePath);
                            $data["selected_img"] = $filePathUrl;
                        }
                        
                        $img->clear();
                        $img->destroy();
                    }else{

                        // Checking if File Already Exists
                        if(file_exists($config['upload_path'].'/'.$_FILES["selected-img"]["name"])){
                            $data["selected_img"] = '\\CodeIgniterApp\\'.explode(FCPATH,str_replace('/', '\\',$config['upload_path'].'/'.$_FILES["selected-img"]['name']))[1];
                        }else{
                            
                            if($this->upload->do_upload('selected-img')){
                                // Saving File into Database
                                $data["selected_img"] = '\\CodeIgniterApp\\'.explode(FCPATH,str_replace('/', '\\',$this->upload->data()['full_path']))[1];
        
                            }
                        }
                    }



                }
                if(isset($_FILES["image"])){
                    // Upload Form  Submitted
                    $config['upload_path']      = FCPATH."assets/uploads";
                    $config['allowed_types']    = 'gif|jpg|jpeg|png|bmp|webp|tiff|x-icon';

                    $this->load->library('upload', $config);
                    $image_path = $config['upload_path'].'/'.$_FILES["image"]['name'];
                    // Checking if File Already Exists
                    if(file_exists($image_path)){
                        $data["image"] = '\\CodeIgniterApp\\'.explode(FCPATH,str_replace('/', '\\',$image_path))[1];
                    }else{

                        if($this->upload->do_upload('image')){
                            // Saving File into Database
                            $data["image"] = '\\CodeIgniterApp\\'.explode(FCPATH,str_replace('/', '\\',$this->upload->data()['full_path']))[1];
                            try {
                                // Some Image Error Because Garbage Input(Corrupted)
                                // Convert warnings to exceptions
                                set_error_handler(function($severity, $message, $file, $line) {
                                    throw new \ErrorException($message, 0, $severity, $file, $line);
                                });
                                $image = imagecreatefromstring(file_get_contents($image_path));
                            } catch (\Throwable $th) {

                                    // Imagick Fixes Image
                                    $img = new Imagick($image_path);
                                    $img->stripImage();
                                    // Save the image back
                                    $img->writeImage($image_path);

                                    // Free Memory
                                    $img->clear();
                                    $img->destroy();
                            } finally{
                                restore_error_handler();
                            }
    
                        }
                    }
                }
            }

            
            $this->load->view("Travel_planner/inc/header");
            $this->load->view('Travel_planner/dashboard/editImage', $data);
            $this->load->view("Travel_planner/inc/footer");
        }
    }
