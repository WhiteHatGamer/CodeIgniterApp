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

        public function get_note($id){
            $email  = $this->session->email;

            $result = $this->db->get_where($this->table,array('email'=>$email, 'id'=>$id));

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

        public function insert_note(){
            $email  = $this->session->email;

            $inputs = $this->input->dump_post_array(array('note'));
            $inputs['email'] = $email;
            $result = $this->db->insert($this->table,$inputs);

            if($result){
        
                return true;
            }else{
                
                return false;
            }

        }

        public function update_note(){
            $email  = $this->session->email;
            
            $inputs = $this->input->dump_post_array(array('note'));
            $result = $this->db->update($this->table,$inputs, array('id'=>$this->input->post('id'), 'email'=>$email));

            if($result){
        
                return true;
            }else{

                return false;
            }

        }
    }
?>