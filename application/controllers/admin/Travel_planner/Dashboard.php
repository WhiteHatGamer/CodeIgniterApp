<?php

  defined('BASEPATH') OR exit('No direct script access allowed');  

  class Dashboard extends CI_Controller{

    public function __construct(){
      
      parent::__construct();
      $this->load->model("user_model");
    }

    public function index(){

      // Checking If User is Logged In
      if(!$this->session->email){
        redirect(adminTravelPlannerUrl());
          return;
      }

      $CookieName = $_SERVER['REMOTE_ADDR'];
      
      // Starting Session
      @session_start();
      
    }
  }

?>