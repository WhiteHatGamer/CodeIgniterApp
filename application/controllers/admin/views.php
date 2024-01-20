<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');  

    class Views extends CI_Controller{

        public function widgets(){
            
            $this->load->view('admin/views/widgets');
        }

    }
?>