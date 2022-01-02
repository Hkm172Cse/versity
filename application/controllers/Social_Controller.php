<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->Model('Author_Model');
        $this->load->Model('Social_Model');
        $this->load->Model('LUCC_Model');
		
	}

    public function social_admin_post(){
        $data['header_src'] = $this->load->view('inc/SOCIAL_admin/header_src', '', true);
        $data['main_menu'] = $this->load->view('inc/SOCIAL_admin/main_menu', '', true);
        $data['sidebar'] = $this->load->view('inc/SOCIAL_admin/sidebar', '', true);
        $data['select_all_user'] = $this->Author_Model->select_all_user();
        $this->load->view('SOCIAL_admin/Post', $data);
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
            redirect('social_admin_panel');
        }
    }

    public function edit($id){
        $data['header_src'] = $this->load->view('inc/SOCIAL_admin/header_src', '', true);
        $data['main_menu'] = $this->load->view('inc/SOCIAL_admin/main_menu', '', true);
        $data['sidebar'] = $this->load->view('inc/SOCIAL_admin/sidebar', '', true);
        $data['user_record'] = $this->Author_Model->slect_sigle_row($id);

       $this->load->view('SOCIAL_admin/EditUser', $data);
    }

    public function admin_login(){
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $person_info = $this->Social_Model->information_Check($data);
        $data['group'] = $person_info->group_name;
        $data['mytitle'] = $person_info->title; 
        

        if($data['mytitle']=='SOCIAL_admin'){
            if($this->Social_Model->isLogin($data)){
                $this->session->set_userdata('social_admin', $data['email']);
                redirect('social_admin_panel');
            }
        }else if($data['group']=='social_group'){
            if($this->LUCC_Model->isLogin($data)){
                 $this->session->set_userdata('social_profile', $data['email']); 
                 redirect('Social');
            }
        }
    }

    public function adminPanel_index(){
        $super_admin = $this->session->userdata('super_admin');
        $data['super_admin_info'] = $this->Author_Model->superAdmin_info($super_admin);
        $data['header_src'] = $this->load->view('inc/SOCIAL_admin/header_src','', true);
        $data['sidebar'] = $this->load->view('inc/SOCIAL_admin/sidebar', '', true);
        $data['main_menu'] = $this->load->view('inc/SOCIAL_admin/main_menu', '', true);
        $data['ludc_members'] = $this->Social_Model->select_all_user();
        $this->load->view('SOCIAL_admin/contain', $data);
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
        
            if($this->Social_Model->insert_entry($data)){
                $this->Author_Model->insert_entry($data);
                $this->session->set_flashdata('reg_suc','<div class="social-icons"> Register Successfully</div>');
                redirect('social_login_register');
            }else{
                $this->session->set_flashdata('reg_err', '<div class="social-icon">Register Not Successfull</div>');
                redirect('social_login_register');
            }
        }else{
            $this->session->set_flashdata('social_valid_email','You are not University Student');
            redirect('social_login_register');
        }
        
        
    }

    public function registerPage(){
        $data['header_src'] = $this->load->view('inc/Login_register/header_src', '', true);
        $this->load->view('SOCIAL_admin/login_register', $data);
    }


    public function index(){
        $data['header_src'] = $this->load->view('inc/Social/header_src', '', true);
        $this->load->view('Social', $data);
    }

    public function deleteMethod($id){
        if($this->Author_Model->delete($id)){
            redirect('social_admin_panel');
        }
    }

}
