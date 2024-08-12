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


        public function getImages(){
            $email = $this->session->email;

            $results = $this->db->get_where($this->table, array('user_id'=>$email));
            if($results->num_rows() > 0){

                return $results->result_array();
            }else{
                return false;
            }
        }
