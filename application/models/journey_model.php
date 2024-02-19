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

}