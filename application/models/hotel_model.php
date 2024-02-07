<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    class Hotel_model extends CI_Model{
    
        public $id;
        public $email;
        public $city;
        public $hotel;
        public $checkIn;
        public $checkOut;
        
        private $table = 'stay';

        public function __construct()
        {
        $this->load->database();
        $this->load->library('session');
        }

    }
?>