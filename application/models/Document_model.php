<?php

use PhpOffice\PhpSpreadsheet\Cell\DataType;

    defined("BASEPATH") OR exit("No Direct Access Allowed");

    Class Document_model extends CI_Model{
        
        public $id;
        public $user_id;
        public $dataType;
        public $filePath;

        private $table = "document";

        public function __construct(){
            $this->load->database();
            $this->load->library('session');
        }

        public function uploadImages($inputs = array('user_id' => 'null')){

            $email = $this->session->email;
            
            if($inputs == array('user_id'=> 'null')){
                return false;
            }else{
                foreach ($inputs as $key => $value){
                    $inputRow['user_id'] = $email;
                    $filePath = base64_encode('\\CodeIgniterApp\\'.explode(FCPATH,str_replace('/', '\\', $value['path']))[1]);
                    $dataType = $value['type'];
                    
                    $QueryInsert = "INSERT INTO {$this->table} (user_id, dataType, filePath) VALUES( '$email', '$dataType', '$filePath' );";
                    $result = $this->db->query($QueryInsert);
                }

                return true;
            }
        }

        public function getImages(){
            $email = $this->session->email;

            $results = $this->db->get_where($this->table, array('user_id'=>$email));
            if($results->num_rows() > 0){

                return $results->result_array();
            }else{
                return false;
            }
        }

        public function getImage($inputs=array('user'=>'null')){
            if($inputs == array('user'=>'null')){
                return false;
            }else{

                $email = $this->session->email;
                $id = $inputs['id'];
    
                $results = $this->db->get_where($this->table, array('user_id'=>$email, 'id'=>$id));
                if($results->num_rows() > 0){
    
                    return $results->result_array();
                }else{
                    return false;
                }
            }
        }

        public function deleteImage($id){
            $email = $this->session->email;
            $data = array("user_id" => $email, 'id'=> $id);
            $result = $this->db->get_where($this->table, $data);

            if($result->num_rows() > 0){
                if($this->db->delete($this->table, $data)){
                    // Deleted File
                    return true;
                }else{
                    // Can't Delete
                    return false;
                }
            }else{
                // Couldn't Find Result
                return false;
            }
        }

    }