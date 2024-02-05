<?php

    class Note_model extends CI_Model{
    
        public $id;
        public $email;
        public $create_time;
        public $note;
        
        private $table = 'notes';

        public function __construct()
        {
            $this->load->database();
            $this->load->library('session');
        }

        public function get_notes(){
            $email  = $this->session->email;

            $result = $this->db->get_where($this->table,array('email'=>$email));

            if($result->num_rows() > 0){

                $notes = array();
                foreach ($result->result_array() as $key => $value){
                    array_push($notes,$value);
                }
        
                return $notes;
            }else{
                return false;
            }

        }
    }
?>