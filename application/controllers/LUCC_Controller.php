<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LUCC_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
		$this->load->model('LUCC_Model');
        $this->load->model('Author_Model');
	}

    public function lucc_admin_post(){
        $data['header_src'] = $this->load->view('inc/LUCC_admin/header_src', '', true);
        $data['main_menu'] = $this->load->view('inc/LUCC_admin/main_menu', '', true);
        $data['sidebar'] = $this->load->view('inc/LUCC_admin/sidebar', '', true);
        $data['select_all_user'] = $this->Author_Model->select_all_user();
        $this->load->view('LUCC_admin/Post', $data);
    }

    public function index(){
        $data['header_src'] = $this->load->view('inc/LLCC/header_src', '', true);
        $this->load->view('LUCC', $data);
    }

    public function adminPanel_index(){
        $super_admin = $this->session->userdata('super_admin');
        $data['super_admin_info'] = $this->Author_Model->superAdmin_info($super_admin);
        $data['header_src'] = $this->load->view('inc/LUCC_admin/header_src','', true);
        $data['sidebar'] = $this->load->view('inc/LUCC_admin/sidebar', '', true);
        $data['main_menu'] = $this->load->view('inc/LUCC_admin/main_menu', '', true);
        $data['lucc_members'] = $this->LUCC_Model->select_all_user();
        $this->load->view('LUCC_Admin/contain', $data);
    }

    public function registerPage(){
        $data['header_src'] = $this->load->view('inc/Login_register/header_src', '', true);
        $this->load->view('LUCC_admin/login_register', $data);
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
                redirect('login_register');
            }else{
                $this->session->set_flashdata('reg_err', '<div class="social-icon">Register Not Successfull</div>');
                redirect('login_register');
            }
        }else{
            $this->session->set_flashdata('lucc_valid_email','You are not University Student');
            redirect('lucc_login_register');
        }
        
        
    }

    public function admin_login(){
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $person_info = $this->LUCC_Model->information_Check($data);
        $data['group'] = $person_info->group_name;
        $data['mytitle'] = $person_info->title; 
        

        if($data['mytitle']=='LUCC_admin'){
            if($this->LUCC_Model->isLogin($data)){
                $this->session->set_userdata('lucc_admin', $data['email']);
                redirect('lucc_admin_panel');
            }
        }else if($data['group']=='LUCC'){
            if($this->LUCC_Model->isLogin($data)){
                 $this->session->set_userdata('lucc_profile', $data['email']); 
                 redirect('LUCC');
            }
        }
    }

    public function edit($id){
        $data['header_src'] = $this->load->view('inc/LUCC_admin/header_src', '', true);
        $data['main_menu'] = $this->load->view('inc/LUCC_admin/main_menu', '', true);
        $data['sidebar'] = $this->load->view('inc/LUCC_admin/sidebar', '', true);
        $data['user_record'] = $this->Author_Model->slect_sigle_row($id);

       $this->load->view('LUCC_admin/EditUser', $data);
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
            redirect('lucc_admin_panel');
        }
    }

    public function logout_lucc_admin(){
        $this->session->unset_userdata('lucc_admin'); 
        redirect('LUCC');
    }

    public function deleteMethod($id){
        if($this->Author_Model->delete($id)){
            redirect('lucc_admin_panel');
        }
    }

}
