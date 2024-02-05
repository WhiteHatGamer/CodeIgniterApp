<?php

    class Note_model extends CI_Model{
    
        public $id;
        public $email;
        public $create_time;
        public $note;
        
        private $table = 'notes';

        public function __construct()
        {
            $this->load->database();
            $this->load->library('session');
        }

    }
?>