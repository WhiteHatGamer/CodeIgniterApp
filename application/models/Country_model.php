<?php
    defined("BASEPATH") OR exit("No Direct Access Allowed");

    Class Country_model extends CI_Model{

        // Country Properties
        public $id;
        public $country;
        public $iso2;
        public $iso3;

        // Table Name
        private $table = "country";

        public function __construct(){
            $this->load->database();
            $this->load->library('session');
        }

        // Get Countries
        public function getCountries($inputs = array("country"=>"null")){
            if($inputs == array("country"=>"null")){

                // Getting Every Countries
                $result = $this->db->get($this->table);
            }else{
                // Getting the result based on the Input
                $result = $this->db->get_where($this->table, $inputs);
            }
            if($result->num_rows() > 0){
                // Got Countries
                return $result->result_array();
            }else{
                return false;
            }
        }
    }