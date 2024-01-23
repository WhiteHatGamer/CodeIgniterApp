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
      

      // Get Name from db
      $user_details = $this->user_model->get_user_details($_SESSION['email']);
      $name = $user_details['name'];
      if(isset($name)){
          $_SESSION['name'] = $name;
      }

      $this->load->view('admin/Travel_planner/inc/header');
      $this->load->view('admin/Travel_planner/dashboard/index', $user_details);
      $this->load->view('admin/Travel_planner/inc/footer');
      
    }
  }

?>