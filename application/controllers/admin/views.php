<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');  

    class Views extends CI_Controller{

        public function widgets(){
            
            $this->load->view('admin/views/widgets');
        }

        public function charts($page){
                        
            // Checking if Empty argument is passed
            if(empty($page)){

                show_404();
            }
            
            // Checking if file Available
            $requestedFile = APPPATH.'views/admin/views/charts/'.$page;
            if(!file_exists($requestedFile)){
                
                // Page doesn't Exists
                show_404();
            }
            
            $this->load->view('admin/views/charts/'.$page);
        
        }

        public function layout($page){
                        
            // Checking if Empty argument is passed
            if(empty($page)){

                show_404();
            }
            
            // Checking if file Available
            $requestedFile = APPPATH.'views/admin/views/layout/'.$page;
            if(!file_exists($requestedFile)){
                
                // Page doesn't Exists
                show_404();
            }
            
            $this->load->view('admin/views/layout/'.$page);
        
        }

        public function ui($page){
                        
            // Checking if Empty argument is passed
            if(empty($page)){

                show_404();
            }
            
            // Checking if file Available
            $requestedFile = APPPATH.'views/admin/views/UI/'.$page;
            if(!file_exists($requestedFile)){
                
                // Page doesn't Exists
                show_404();
            }
            
            $this->load->view('admin/views/UI/'.$page);
        
        }
        
        public function forms($page){
                        
            // Checking if Empty argument is passed
            if(empty($page)){

                show_404();
            }
            
            // Checking if file Available
            $requestedFile = APPPATH.'views/admin/views/forms/'.$page;
            if(!file_exists($requestedFile)){
                
                // Page doesn't Exists
                show_404();
            }
            
            $this->load->view('admin/views/forms/'.$page);
        
        }
        
        public function tables($page){
                        
            // Checking if Empty argument is passed
            if(empty($page)){

                show_404();
            }
            
            // Checking if file Available
            $requestedFile = APPPATH.'views/admin/views/tables/'.$page;
            if(!file_exists($requestedFile)){
                
                // Page doesn't Exists
                show_404();
            }
            
            $this->load->view('admin/views/tables/'.$page);
        
        }

    }
?>