<?php

  defined('BASEPATH') OR exit('No direct script access allowed');
  require 'vendor/autoload.php';
  use chriskacerguis\RestServer\RestController;

  define("STATUS_SUCCESS", "success");
  define("STATUS_FAIL", "fail");
  define("STATUS_ERROR", "error");

  class Api extends RestController{

    public function __construct(){
      
      parent::__construct();
      $this->load->model("user_model");
      $this->load->model("city_model");
    }

}