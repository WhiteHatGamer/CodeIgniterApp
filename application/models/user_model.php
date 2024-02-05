<?php

  class User_model extends CI_Model{
    
    public $name;
    public $email;
    public $password;
    public $number;
    public $gender;
    public $dob;
    public $image;
    public $prefix;
    
    private $table = 'user';

    public function __construct()
    {
      $this->load->database();
      $this->load->library('session');
    }

    public function Validate_user($Email, $Password){

      $query = $this->db->get_where($this->table, array('email'=>$Email, 'password'=>md5($Password)));
      if($query->num_rows() > 0){
        return true;
      }else{
        return false;
      }
    }
      
    public function get_user_details($Email = ""){
      if($Email == ""){
        $Email = $this->session->email;
      }
      // $query = $this->db->get_where($this->table, array('email'=>$Email));
      $query = $this->db->query("SELECT name,email,number,gender,dob,image,prefix FROM {$this->table} WHERE email='$Email'");

      if($query->num_rows() > 0){
        return $query->result_array()[0];
      }else{
        return false;
      }
    }

  }
