<?php

    defined('BASEPATH') OR exit('No direct script access allowed');  

    class News extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('newsModel');
        }

        public function index(){
            $data['news'] = $this->newsModel->getNews();
            $data['title'] = 'News Archive';

            $this->load->view('templates/header',$data);
            $this->load->view('news/index',$data);
            $this->load->view('templates/footer');
        }
    }