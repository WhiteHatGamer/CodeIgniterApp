<?php

    defined('BASEPATH') OR exit('No direct script access allowed');
    use PhpOffice\PhpSpreadsheet\Reader\Csv as CsvReader;

    class Tourism extends CI_Controller{
        
        public function __construct(){
                
            parent::__construct();
            $this->load->library("session");
            $this->load->model('journey_model');
            $this->load->model('stay_model');
            $this->load->model('city_model');
            $this->load->model('country_model');
            $this->load->model('document_model');
        }

        public function index(){
            // Every Destinations the user is Going to
            // Checking If User is Logged In
            if(!$this->session->email){
                redirect(adminTravelPlannerUrl());
                return;
            }
            
            // Getting All Destinations
            $destinations = array();
            $temp = array();
            foreach($this->journey_model->get_trips() as $key => $value){
                $temp[] = $value["destination"];
            }
            foreach($this->stay_model->get_stays() as $key => $value){
                $temp[] = $value["city"];
            }
            
            // Removing Duplicates
            $data["destinations"] = array_values(array_unique($temp));
            $countries = [];
            foreach($data["destinations"] as $value){
                // getting Countries from cities/Destinations to link to holiday Makers
                if(str_contains($value,",")){

                    $countries[] = urlencode($this->country_model->getCountries(array("iso3"=>(explode(", ",$value)[2])))[0]["country"]);
                }else{
                    $countries[] = '';
                }
            }

            // Storing Countries as same as destinations to link with Images
            $data["countries"] = $countries;

            $data["images"] = array();

            foreach($data["destinations"] as $key=>$value){
                // Getting Images from Wikipedia Site
                $searchKey = str_contains($value,",")? explode("," ,$value)[0]:$value;
                $url = "https://commons.wikimedia.org/wiki/Special:MediaSearch?type=image&search=" . urlencode($searchKey);
                
                $html = file_get_contents($url);
                preg_match('/<img[^>]+src="([^">]+)"/', $html, $matches);

                // Giving Place holder if No Image Found
                if (!empty($matches[1])) {
                    $data["images"][$key]["filePath"] = base64_encode($matches[1]);
                } else {
                    $data["images"][$key]["filePath"] = "https://placehold.co/400";
                }
                
            }

            $this->load->view('Travel_planner/inc/header');
            $this->load->view('Travel_planner/Dashboard/Tourism/destiny', $data);
            $this->load->view("Travel_planner/inc/footer");

        }
    }