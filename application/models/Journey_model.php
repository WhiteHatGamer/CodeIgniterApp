    public function check_duplicate($input = array(null=>null)){
        if($input == array(null=>null)){
            return false;
        }

        $result = $this->db->get_where($this->table, $input);
        if($result->num_rows() > 0){
            return true;
        }else{
            return false;
        }
    }

