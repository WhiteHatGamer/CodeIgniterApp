<?php
    
    class NewsModel extends CI_Model{

        public function __construct()
        {
            $this->load->database();
        }

        public function getNews($slug = false){
            if($slug === FALSE){
                $query = $this->db->get('news');
                return $query->result_array();
            }
            
            $query = $this->db->get_where('news', array('slug' => htmlspecialchars($slug)));
            return $query->result_array();
        }
    }