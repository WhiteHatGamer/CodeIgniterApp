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

        public function get_stays(){
            $email  = $this->session->email;

            $result = $this->db->get_where($this->table,array('email'=>$email));
            
            if($result->num_rows() > 0){
                
                return $result->result_array();

            }else{
                return false;
            }
        }

        public function get_stay($id){
            $email  = $this->session->email;

            $result = $this->db->get_where($this->table,array('id'=>$id,'email'=>$email));

            if($result->num_rows() > 0){

                $stays = array();
                foreach ($result->result_array() as $key => $value){
                    array_push($stays,$value);
                }

                return $stays[0];

            }else{
                return false;
            }
        }

    }
?>