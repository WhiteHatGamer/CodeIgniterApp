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

}