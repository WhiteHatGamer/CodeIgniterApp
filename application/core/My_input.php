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

    }