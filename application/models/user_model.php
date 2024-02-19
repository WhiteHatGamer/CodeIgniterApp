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

    public function register_user(){
      
      $this->email    = $this->input->post('email');
      $this->name     = $this->input->post('name');
      $this->password = $this->input->post('password');
      $this->image    = 'C:/xampp/htdocs/CodeIgniterApp/assets/dist/img/default-user.png';

      if($this->name){
        $result = $this->db->insert($this->table,array("name"=>$this->name, "email"=>$this->email, "password"=>md5($this->password)));
        
      }else{
        $result = $this->db->insert($this->table,array("email"=>$this->email, "password"=>md5($this->password)));
        
      }
      if($result){
        // Default Image set
        $QueryUpdate = "UPDATE {$this->table} SET image = LOAD_FILE('$this->image') WHERE email='".$this->email."'";
        $this->db->query($QueryUpdate);
      }
      return $result;

    }

    // Execute Query
    function update_column($column, $value){

      switch($column){
        case 'image':
          $QueryUpdate = "UPDATE {$this->table} SET $column = $value WHERE email='".$this->session->email."'";
          $result = $this->db->query($QueryUpdate);
          break;

        case 'password':
          if($this->Validate_user($this->session->email, $this->input->post('OldPassword'))){
            $QueryUpdate = "UPDATE {$this->table} SET $column = md5('$value') WHERE email='".$this->session->email."' && password=md5('{$this->input->post('OldPassword')}')";
            $result = $this->db->query($QueryUpdate);
          }else{
            return 'wrongPassword';
          }
          break;

        default:
          $result = $this->db->update($this->table,array($column=>$value),array('email'=>$this->session->email));
          break;

      }  
      return $result;

    }


  }
