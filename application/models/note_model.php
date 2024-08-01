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


        public function check_duplicate($input = array('note'=>'null')){
            if($input == array('notes'=>'null')){
                return false;
            }

            $results = $this->db->get_where($this->table, $input);
            if($results->num_rows() > 0){
                return true;
            }else{
                return false;
            }
        }


        public function insert_notes($inputs = array('notes'=>'null')){
            
            // Getting mail id from session
            $email  = $this->session->email;
            
            if($inputs == array('notes'=>'null')){
                $inputs = $this->input->dump_post_array(array('create_time', 'note'));
            }
        
            $inputs['email'] = $email;
            
            if($this->check_duplicate($inputs)){
                return false;
            }

            
            // Inserting Input array to db and return code
            $this->db->insert($this->table, $inputs);
            if($this->db->error()['code']){
                return false;
            }else{
                return true;
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

        public function delete_note($id = null){
            $email  = $this->session->email;
            
            $inputs = [];
            $inputs['id'] = $this->input->post('confirmDlt');
            if($this->get_note($inputs['id'])){

                $inputs['email'] = $email;
                $result = $this->db->delete($this->table,$inputs);
                return true;
            }
            
            return false;
        }

    }
?>