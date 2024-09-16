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

    public function cities_get(){
        // catching any error
        try{

            // Checking If User is Logged In
            if(!$this->session->email){
                $this->output
                        ->set_status_header(401)
                        ->set_content_type('application/json', 'utf-8')
                        ->set_output(json_encode([
                        "status"=>"error",
                        "message"=>"",
                        "data"=>"Please Login First"
                        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT))
                        ->_display();
                exit;
            }
      
            // Getting City Names Based on Search Query
            $term = $this->get("s");
    
            // Preprocessing String for better Result
            $term = @trim($term);
            if(strlen($term) >2){
                try{
                    
                    $cities = $this->city_model->get_city($term,"api");
                    $this->output
                        ->set_status_header(200)
                        ->set_content_type("application/json", "utf-8")
                        ->set_output(
                            json_encode([
                            "status"=>STATUS_SUCCESS,
                            "message"=>"",
                            "data"=>$cities
                            ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                        );
                }catch(Exception $e){

                    $this->output
                        ->set_status_header(500)
                        ->set_content_type("application/json", "utf-8")
                        ->set_output(
                            json_encode([
                            "status"=>STATUS_ERROR,
                            "message"=>$e->getMessage(),
                            ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                        );
                }
                
            }else{
                $this->output
                    ->set_status_header('400')
                    ->set_content_type('application/json', 'utf-8')
                    ->set_output(
                        json_encode([
                        "status"=>STATUS_FAIL,
                        "message"=>"",
                        "data"=>"Please Enter More than 2 Characters without spaces"
                        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                    );
            }
        }catch(Exception $e){
            
            $this->output
            ->set_status_header('500')
            ->set_content_type('application/json', 'utf-8')
            ->set_output(
              json_encode([
                "status"=>STATUS_ERROR,
                "message"=>"",
                "data"=>"Please Enter More than 2 Characters without spaces"
              ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
            );
        }
        return;
    }
}