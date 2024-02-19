<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class User_profile extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model("user_model");
            $this->load->library("session");
        }


        public function clear_session(){
            
            @session_start();
            session_unset();
            session_destroy();
            redirect(adminTravelPlannerUrl());
        }
    }

?>