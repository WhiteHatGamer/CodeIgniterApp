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

    private function throw_response($status, $data="null"){
        switch($status){
            case 200:
                // Success
                $this->output
                    ->set_status_header(200)
                    ->set_content_type("application/json", "utf-8")
                    ->set_output(
                        json_encode([
                        "status"=>STATUS_SUCCESS,
                        "message"=>"Operation Completed Successfully",
                        "data"=>$data
                        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                );
            case 400:
                // Bad Request
                $this->output
                    ->set_status_header(400)
                    ->set_content_type("application/json", "utf-8")
                    ->set_output(
                        json_encode([
                        "status"=>STATUS_FAIL,
                        "message"=>"Bad Request",
                        "data"=>$data
                        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                    );
            case 401:
                // Unauthorized
                $this->output
                    ->set_status_header(401)
                    ->set_content_type("application/json", "utf-8")
                    ->set_output(
                        json_encode([
                        "status"=>STATUS_FAIL,
                        "message"=>"Unauthorized",
                        "data"=>$data
                        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                    );
            case 403:
                // Forbidden
                $this->output
                    ->set_status_header(403)
                    ->set_content_type("application/json", "utf-8")
                    ->set_output(
                        json_encode([
                        "status"=>STATUS_FAIL,
                        "message"=>"Forbidden",
                        "data"=>$data
                        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                    );
            case 404:
                // Not Found
                $this->output
                    ->set_status_header(404)
                    ->set_content_type("application/json", "utf-8")
                    ->set_output(
                        json_encode([
                        "status"=>STATUS_FAIL,
                        "message"=>"Not Found",
                        "data"=>$data
                        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                    );
            case 500:
                // Internal Server Error
                $this->output
                    ->set_status_header(500)
                    ->set_content_type("application/json", "utf-8")
                    ->set_output(
                        json_encode([
                        "status"=>STATUS_ERROR,
                        "message"=>"Internal Server Error",
                        "data"=>$data
                        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                    );
            default:
                // Unknown Error
                $this->output
                    ->set_content_type("application/json", "utf-8")
                    ->set_output(
                        json_encode([
                        "status"=>STATUS_ERROR,
                        "message"=>"Unknown Error",
                        "data"=>""
                        ], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)
                    );

            return;
        }
    }
    
}