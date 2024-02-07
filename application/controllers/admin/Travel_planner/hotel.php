<?php

    defined('BASEPATH') OR exit('No direct script access allowed');

    use PhpOffice\PhpSpreadsheet\Spreadsheet;
    use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
    use PhpOffice\PhpSpreadsheet\Writer\Pdf\Dompdf;
    use PhpOffice\PhpSpreadsheet\Writer\Csv;

    class Hotel extends CI_Controller{
        

        public function __construct(){
            parent::__construct();
            $this->load->model('hotel_model');
            $this->load->library(array('session','table'));
        }

    }