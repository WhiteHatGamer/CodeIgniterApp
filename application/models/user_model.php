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


  }
