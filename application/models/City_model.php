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

        // Add City
        public function storeCity($input = array("city"=>"null")){
            // Check If Duplicate
            if($input == array("city"=>"null")){
                return false;
            }
            if($this->isDuplicate($input)){
                return false;
            }
            // Inserting Input array to db and return code
            if($this->db->insert($this->table, $input)){
                return true;
            }else{
                return false;
            }
        }

        public function getCities($input = array("city"=>"null"), $order_by = "null"){
            if($input == array("city"=>"null")){
                // Getting Every Cities
                $result = $this->db->get($this->table);
            }else{
                // Checking If Input Cities are available
                if(!$this->isDuplicate($input)){
                    return null;
                }
                // Getting the result based on the Input
                if($order_by != "null"){
                    $this->db->order_by($order_by);
                    $result = $this->db->get_where($this->table, $input);
                }else{
                    $result = $this->db->get_where($this->table, $input);
                    
                }
            }
            return $result->result_array();
        }

        public function get_city($str, $type="null"){
            $this->db->select(array("id","city", "state", "country"));
            if($type == "api"){
                // Searching countries
                $this->db->like("country",$str);
                $countries = $this->db->get($this->table)->result_array();

                // Searching Cities
                $this->db->select(array("id","city", "state", "country"));
                $this->db->like("city",$str, "after");
                $cities = $this->db->get($this->table)->result_array();

                // Fetching States
                $this->db->select(array("id","city", "state", "country"));
                $this->db->like("state",$str);
                $states = $this->db->get($this->table)->result_array();
                return array_merge($countries, $cities, $states);
            }else{
                $this->db->select(array("id","city", "state", "country"));

                $this->db->like("city",$str);
                $results = $this->db->get($this->table);
                return $results->result_array();

            }
            
        }
    }