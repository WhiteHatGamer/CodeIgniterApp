<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    class MY_Input extends CI_Input {

        public function __construct(){
            parent::__construct();
        }

        function dump_post(){

            $post = array();
            foreach ( array_keys($_POST) as $key )
            {
                $post[$key] = $_POST[$key];
            }

            return $post;
        }

        function dump_post_array(array $input_array){

            try{

                $post = array();
                foreach ( $input_array as $key )
                {
                    $post[$key] = $_POST[$key]?? null;
                }
    
                return $post;
            }catch(Exception $e){
                show_404("Server Error".$e->getMessage());
            }
        }
    }