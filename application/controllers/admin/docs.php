<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');  

    class docs extends CI_Controller{
        
        public function _includes($page){
            
            // Checking if Empty argument is passed
            if(empty($page)){

                show_404();
            }
            
            // Checking if file Available
            $requestedFile = APPPATH.'views/admin/docs/_includes/'.$page;
            if(!file_exists($requestedFile)){
                
                // Page doesn't Exists
                show_404();
            }
            
            $this->load->view('admin/docs/_includes/'.$page);
        
        }

    }
?>