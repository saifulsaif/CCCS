<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
session_start();
class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model', 'sa_model', true);
        $this->load->model('welcome_model', 'w_model', true);
        $admin_id = $this->session->userdata('admin_id');

        $this->load->model("welcome_model");
        $this->load->helper("url");
        $this->load->helper('form');
        ;
        
    }

    public function index() {
        $data = array();
        $this->load->view('admin/login', $data);
    }

    public function home() {
        $data = array();
        $data['last_ten_case']=$this->w_model->select_ten_case();
        $data['maincontent'] = $this->load->view('maincontent', $data, true);
        $this->load->view('index', $data);
    }

    public function category() {
        $data = array();
        $data['maincontent'] = $this->load->view('category', $data, true);
        $this->load->view('index', $data);
    }

    public function payment() {
        $data = array();
        $data['maincontent'] = $this->load->view('payment', $data, true);
        $this->load->view('index', $data);
    }

    public function crime_list() {
        $data = array();
        $data['all_case']=$this->w_model->select_all_case();

        $this->load->view('crime_list', $data);
    }
    public function make_crime(){
         $data = array();
         
        $location=$this->input->post('location',true);
        $car_number = $this->input->post('car_number', true);
        $accident = $this->input->post('accident', true);
        $general=$this->input->post('general',true);
        $safety = $this->input->post('safety', true);
        $deny_signal = $this->input->post('deny_signal', true);
        $deny_order = $this->input->post('deny_order', true);
        $hydrolic_horn = $this->input->post('hydorlic_horn', true);
        $careless_drive = $this->input->post('careless_drive', true);
        $smoke = $this->input->post('smoke', true);
        $case_id;
        
        if($accident!=null){
            $data['date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$accident ;
            $data['fine']=$fine='300';
            $data['location']=$location;
         
            $this->w_model->save_crime_info($data);
           
            
        } if($general!=null){
            $data=array();
            $data['date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$general ;
            $data['fine']=$fine='100';
            $data['location']=$location;
            
            $case_id=$this->w_model->save_crime_info($data);
        
            
        } if($careless_drive!=null){
            $data=array();
            $data['date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$careless_drive ;
            $data['fine']=$fine='400';
            $data['location']=$location;
              $case_id=$this->w_model->save_crime_info($data);
           
            
        } if($deny_order!=null){
            $data=array();
            $data['date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$deny_order ;
            $data['fine']=$fine='500';
            $data['location']=$location;
           $case_id=$this->w_model->save_crime_info($data);
         
            
        }if($deny_signal!=null){
            $data=array();
            $data['date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$deny_signal ;
            $data['fine']=$fine='500';
            $data['location']=$location;
            $case_id=$this->w_model->save_crime_info($data);
          
            
        } if($hydrolic_horn!=null){
            $data=array();
            $data['date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$hydrolic_horn ;
            $data['fine']=$fine='200';
            $data['location']=$location;
           $case_id=$this->w_model->save_crime_info($data);
        
        } if($safety!=null){
            $data=array();
            $data['date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$safety ;
            $data['fine']=$fine='350';
            $data['location']=$location;
            $case_id=$this->w_model->save_crime_info($data);
          
            
        } if($smoke!=null){
            $data=array();
            $data['date']=date('d-m-Y');
            $data['car_number']=$car_number;
            $data['reason'] =$smoke ;
            $data['fine']=$fine='450';
            $data['location']=$location;
            $case_id=$this->w_model->save_crime_info($data);
         
            
        }
         $sdata = array();
        $sdata['car_number']=$car_number;
        $sdata['case_id']=$case_id;
        $this->sa_model->save_payment_info($sdata);
         $data = array();
         $data['message'] = "Case make Successful";
         $data['all_case']=$this->w_model->select_all_case();
         $this->session->set_userdata($data);
         $this->load->view('crime_list', $data); 
    }

    public function profile() {
        $data = array();
        $data['maincontent'] = $this->load->view('profile', $data, true);
        $this->load->view('index', $data);
    }

    public function login() {
        $data = array();
        $data['title'] = 'Header Details';

        $this->load->view('admin/admin_login', $data);
    }

    public function registration() {
        $data = array();

        $data['fullname'] = $this->input->post('fullname', true);
        $data['email'] = $this->input->post('email', true);
        $data['password'] = $this->input->post('password', true);
        $data['address'] = $this->input->post('address', true);
        $data['number'] = $this->input->post('number', true);
        $this->w_model->save_user_info($data);
        $sdata = array();
        $sdata['message'] = 'Registration Successfully !';
        $this->session->set_userdata($sdata);
        redirect('welcome/daily');
    }

   

    public function logout() {
        $this->session->unset_userdata('admin_id');
        $ldata = array();
        $ldata['loged_out'] = "<b>You are successfully logged out!</b>";
        $this->session->set_userdata($ldata);
        redirect("welcome/index");
    }

    public function create_account() {
        $data = array();

        $this->load->view('create_account', $data);
    }

    public function change_password() {
        $email_address = $this->input->post('admin_email_address', true);
        $old_password = $this->input->post('old_admin_password', true);
        $new_password = $this->input->post('new_admin_password', true);

        $this->load->model('admin_login_model', 'al_model', true);
        $result = $this->al_model->select_admin($email_address, $old_password);

        if ($result) {
            $data = array();

            $data['password'] = ($this->input->post('new_admin_password', true));

            $this->w_model->update_admin_info($data, $email_address);
            $this->session->set_userdata($data);
            redirect("welcome");
        } else {
            $sdata = array();
            $sdata['exception'] = "Enter valid Email and Password!";
            $this->session->set_userdata($sdata);
            redirect("welcome/password");
        }
    }

    public function show() {
        $this->load->view('show');
    }
    public function search_crime(){
        $search = $this->input->post('search', true);
        $sdata = array();
          $data['all_single_car_case']=$this->sa_model->select_all_single_car_case($search);
        $data['all_car'] = $this->w_model->select_crime_cars($search);
        $data['total_case']=$this->sa_model->select_total_case($search);
        $this->session->set_userdata($sdata);
         $data['maincontent'] = $this->load->view('single_car', $data, true);
        $this->load->view('index', $data);
    }

    public function lookup() {
        // process posted form data  
        $keyword = $this->input->post('term');
        $data['response'] = 'false'; //Set default response  
        $query = $this->welcome_model->lookup($keyword); //Search DB  
        if (!empty($query)) {
            $data['response'] = 'true'; //Set response  
            $data['message'] = array(); //Create array  
            foreach ($query as $row) {
                $data['message'][] = array(
                    'id' => $row->product_id,
                    'value' => $row->product_name,
                    ' productQ' => $row->product_quantity,
                );  //Add a row to array  
            }
        }
        if ('IS_AJAX') {
            echo json_encode($data); //echo json string if ajax request  
        } else {
            $this->load->view('show', $data); //Load html view of search results  
        }
    }

}
