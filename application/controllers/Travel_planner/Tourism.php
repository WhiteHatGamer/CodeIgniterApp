<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    use PhpOffice\PhpSpreadsheet\Reader\Csv as CsvReader;

    class Tourism extends CI_Controller{
        
        public function __construct(){
                
            parent::__construct();
            $this->load->library("session");
            $this->load->model('journey_model');
            $this->load->model('hotel_model');
            $this->load->model('city_model');
            $this->load->model('country_model');
            $this->load->model('document_model');
        }

    }