<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');  

    class frames extends CI_Controller{
        public function dashboard2(){

            $this->load->view('admin/frames/dashboard2.php');
        }
        
    }
?>