<?php

  class Journey_model extends CI_Model{
    
    public $id;
    public $email;
    public $source;
    public $destination;
    public $way;
    public $journey;
    public $round;
    
    private $table = 'journey';

    public function __construct()
    {
      $this->load->database();
      $this->load->library('session');
    }

    public function get_trips(){
        $email  = $this->session->email;
        
        $result = $this->db->get_where($this->table,array('email'=>$email));
        
        if($result->num_rows() > 0){
            
            $trips = array();
            foreach ($result->result_array() as $key => $value){
                array_push($trips,$value);
            }
            
            return $trips;
        }else{
            return false;
        }
        
    }

    public function get_trip($id){
        $email  = $this->session->email;
        
        $result = $this->db->get_where($this->table,array('email'=>$email, 'id'=>$id));
        
        if($result->num_rows() > 0){
            
            $trips = array();
            foreach ($result->result_array() as $key => $value){
                array_push($trips,$value);
            }
            
            return $trips;
        }else{
            return false;
        }
        
    }

    public function check_duplicate($input = array(null=>null)){
        if($input == array(null=>null)){
            return false;
        }

        $result = $this->db->get_where($this->table, $input);
        if($result->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function insert_trips($inputs = array('journey'=>'null')){

        // Getting mail id from session
        $email  = $this->session->email;

        // Getting input from post variables if input is null(not import)
        if($inputs == array('journey' => 'null')){
            $inputs = $this->input->dump_post_array(array('source','destination','way','journey','round'));
        }

        $inputs['email'] = $email;

        // Checking duplicate entry and return false
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

    
    public function insert_trip(){
        $email  = $this->session->email;
        foreach($this->db->query("SELECT EXISTS(SELECT * FROM $this->table WHERE email='$email' AND  journey='{$this->input->post('journey')}')")->result_array()[0] as $key => $val){
            if($val == '1'){
                throw new Exception("Duplicate Entry", 1062);
            }
        }

        if($this->input->post('round')){

            $inputs = $this->input->dump_post_array(array('source','destination','way','journey','round'));
        }else{
            
            $inputs = $this->input->dump_post_array(array('source','destination','way','journey'));
        }
        $inputs['email'] = $email;
        if(@$this->db->insert($this->table,$inputs)){
            return true;
        }else{
            return false;
        }

    }

    public function update_trip(){
        $post_keys = $this->input->dump_post_array(array('source','destination','way','journey','round'));
        $result = $this->db->update($this->table,$post_keys,array('id'=>$this->input->post('confirm_edit'),'email'=>$this->session->email));
        return $result;

    }

    public function delete_trip(){
        $result = $this->db->delete($this->table,array('id'=>$this->input->post('confirm_delete'),'email'=>$this->session->email));
        return $result;

    }

}