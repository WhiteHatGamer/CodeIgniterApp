<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');  

    class frames extends CI_Controller{
        public function dashboard2(){

            $this->load->view('admin/frames/dashboard2.php');
        }
        
        public function dashboard3(){

            $this->load->view('admin/frames/dashboard3.php');
        }

        public function iframe(){

            $this->load->view('admin/frames/iframe.php');
        }

        public function iframeDark(){

            $this->load->view('admin/frames/iframe-dark.php');
        }

        public function starter(){

            $this->load->view('admin/frames/starter.php');
        }

    }
?>