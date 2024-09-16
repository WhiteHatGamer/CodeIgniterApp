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

    }