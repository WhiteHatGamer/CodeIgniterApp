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
      
      if(isset($_POST['logout'])){
        if($this->session->remember){
          $email= $this->session->email;
          session_unset();
          session_destroy();
          session_start();
          $_SESSION['remember'] = '1';
          $_SESSION['remail'] = $email;
          header("Location: ".adminTravelPlannerUrl());

        }else{
          session_unset();
          session_destroy();
          header("Location: ".adminTravelPlannerUrl());
        }
      }
      
      // Checking If User is Logged In
      if(!isset($_SESSION['email'])){
          echo "<h3>You Are Logged out Please Login Again!!!</h3><br>";
          echo '<a href="'.adminTravelPlannerUrl().'">Home</a><br>';
          exit;
      }

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
    
    public function get_hint(){
      $this->load->view('admin/Travel_planner/dashboard/getHint');
    }
  }

?>