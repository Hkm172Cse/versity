<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LUDC_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->Model('LUCC_Model');
        $this->load->Model('Author_Model');
        $this->load->Model('LUDC_Model');
		
	}

    public function deleteMethod($id){
        if($this->Author_Model->delete($id)){
            redirect('ludc_admin_panel');
        }
    }

    public function LUDC_admin_post(){
        $data['header_src'] = $this->load->view('inc/LUDC_admin/header_src', '', true);
        $data['main_menu'] = $this->load->view('inc/LUDC_admin/main_menu', '', true);
        $data['sidebar'] = $this->load->view('inc/LUDC_admin/sidebar', '', true);
        $data['select_all_user'] = $this->Author_Model->select_all_user();
        $this->load->view('LUDC_admin/Post', $data);
    }

    public function edit($id){
        $data['header_src'] = $this->load->view('inc/LUDC_admin/header_src', '', true);
        $data['main_menu'] = $this->load->view('inc/LUDC_admin/main_menu', '', true);
        $data['sidebar'] = $this->load->view('inc/LUDC_admin/sidebar', '', true);
        $data['user_record'] = $this->Author_Model->slect_sigle_row($id);

       $this->load->view('LUDC_admin/EditUser', $data);
    }

    public function editMethod(){
        $data['id'] = $this->input->post('update_id');
        $data['user_id'] = $this->input->post('username');
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $data['title'] = $this->input->post('title');
        $data['group_name'] = $this->input->post('group_name');
        if($this->Author_Model->update($data)){
            $this->session->set_flashdata('update_suc', 'Updated Record');
            redirect('ludc_admin_panel');
        }
    }

    public function adminPanel_index(){
        $super_admin = $this->session->userdata('super_admin');
        $data['super_admin_info'] = $this->Author_Model->superAdmin_info($super_admin);
        $data['header_src'] = $this->load->view('inc/LUDC_admin/header_src','', true);
        $data['sidebar'] = $this->load->view('inc/LUDC_admin/sidebar', '', true);
        $data['main_menu'] = $this->load->view('inc/LUDC_admin/main_menu', '', true);
        $data['ludc_members'] = $this->LUDC_Model->select_all_user();
        $this->load->view('LUDC_Admin/contain', $data);
    }

    public function index(){
        $data['header_src'] = $this->load->view('inc/LUDC/header_src', '', true);
        $this->load->view('LUDC', $data);
    }

    public function registerPage(){
        $data['header_src'] = $this->load->view('inc/Login_register/header_src', '', true);
        $this->load->view('LUDC_admin/login_register', $data);
    }

    public function admin_login(){
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $person_info = $this->LUCC_Model->information_Check($data);
        $data['group'] = $person_info->group_name;
        $data['mytitle'] = $person_info->title; 
        

        if($data['mytitle']=='LUDC_admin'){
            if($this->LUCC_Model->isLogin($data)){
                $this->session->set_userdata('ludc_admin', $data['email']);
                redirect('ludc_admin_panel');
            }
        }else if($data['mytitle']=='group_member'){
            if($this->LUCC_Model->isLogin($data)){
                redirect('LUDC');
            }
        }
    }

    public function registation(){
        $email = $this->input->post('email');
        $emailSubstr = explode("@",$email);
        $validEmail = end($emailSubstr);
        if($validEmail == 'lus.ac.bd'){
            $data['user_id']     = $this->input->post('userId');
            $data['email']       = $this->input->post('email');
            $data['password']    = $this->input->post('password');
            $data['title']       = $this->input->post('title');
            $data['group_name']  = $this->input->post('group_name');
        
            if($this->LUCC_Model->insert_entry($data)){
                $this->Author_Model->insert_entry($data);
                $this->session->set_flashdata('reg_suc','<div class="social-icons"> Register Successfully</div>');
                redirect('ludc_login_register');
            }else{
                $this->session->set_flashdata('reg_err', '<div class="social-icon">Register Not Successfull</div>');
                redirect('ludc_login_register');
            }
        }else{
            $this->session->set_flashdata('lucc_valid_email','You are not University Student');
            redirect('ludc_login_register');
        }
        
        
    }

}
