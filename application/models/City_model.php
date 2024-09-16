<?php

    defined("BASEPATH") OR exit("No Direct Access Allowed");

    Class City_model extends CI_Model{
        
        public $id;
        public $city;
        public $state;
        public $country;

        private $table = "city";

        public function __construct(){
            $this->load->database();
            $this->load->library('session');
        }

        private function isDuplicate($input = array("city"=>"null")){
            if($input == array("city"=>"null")){
                return true;
            }else{
                $count = $this->db->get_where($this->table, array("city"=>$input["city"], "country"=>$input["country"], "state"=>$input["state"]))->num_rows();
                if($count > 0){
                    return true;
                }else{
                    
                    return false;
                }
            }
        }

        public function storeCity($input = array("city"=>"null")){
            if($input == array("city"=>"null")){
                return false;
            }
            if($this->isDuplicate($input)){
                return false;
            }
            if($this->db->insert($this->table, $input)){
                return true;
            }else{
                return false;
            }
        }
    }