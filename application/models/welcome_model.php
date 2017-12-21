<?php


class Welcome_model extends CI_Model {
    
    
    
      public function select_crime_cars($search) {
        $this->db->select('*');
        $this->db->from('car');
         $this->db->where('car_number',$search);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
   
    public function save_crime_info($data) {
        $this->db->insert('case', $data);
        return $this->db->insert_id();
    } 
        public function select_all_case() {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->order_by("case_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_ten_case() {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->order_by("case_id", "desc");
        $this->db->limit('8');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
}


?>
