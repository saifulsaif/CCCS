<?php

class super_admin_model extends CI_Model {

    //put your code herep



    public function save_header_info($data) {
        $this->db->insert('header', $data);
    }

    public function select_all_header() {
        $this->db->select('*');
        $this->db->from('header');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_single_car_case($search) {
        $this->db->select('*');
        $this->db->where('case.car_number', $search);
        $this->db->from('case');
        $this->db->join('payment', 'case.case_id = payment.case_id', 'full outer');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_total_case($search){
        $this->db->select('*');
        $this->db->from('case');
        $this->db->where('car_number',$search);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_all_car_info() {
        $this->db->select('*');
        $this->db->from('car');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_all_case_id() {
        $this->db->select('*');
        $this->db->from('payment');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_header_info_by_header_id($header_id) {
        $this->db->where('header_id', $header_id);
        $this->db->delete('header');
    }

    public function select_header_info_by_header_id($header_id) {
        $this->db->select('*');
        $this->db->from('header');
        $this->db->where('header_id', $header_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_header_info($data, $header_id) {
        $this->db->where('header_id', $header_id);
        $this->db->update('header', $data);
    } 
    public function save_public_user_info($data){
     $this->db->insert('car_owner', $data);
     return $this->db->insert_id();
    }
    public function save_public_admin($data){
        $this->db->insert('admin',$data);
    }
     public function save_car_info($data){
        $this->db->insert('car',$data);
    }
     public function save_payment_info($data){
        $this->db->insert('payment',$data);
    }
    public function update_payment_info($case_id,$amount){
    $this->db->set('amount', 'amount+'.$amount, false);
    $this->db->where('case_id',$case_id);
    $this->db->update('payment');
    }
    
 
    
}

?>
