<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Author extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

		$this->load->model('Author_Model');
	}

    public function super_admin_post(){
        $data['header_src'] = $this->load->view('inc/Super_admin/header_src', '', true);
        $data['main_menu'] = $this->load->view('inc/Super_admin/main_menu', '', true);
        $data['sidebar'] = $this->load->view('inc/Super_admin/sidebar', '', true);
        $data['select_all_user'] = $this->Author_Model->select_all_user();
        $this->load->view('Super_admin/Post', $data);
    }

    public function index(){
        $data['header_src'] = $this->load->view('inc/homepage/header_src', '', true);
        $this->load->view('homepage', $data);
    }

    public function superAdmin(){
        $data['header_src'] = $this->load->view('inc/Super_admin/header_src', '', true);
        $data['main_menu'] = $this->load->view('inc/Super_admin/main_menu', '', true);
        $data['sidebar'] = $this->load->view('inc/Super_admin/sidebar', '', true);
        $data['select_all_user'] = $this->Author_Model->select_all_user();
        $this->load->view('Super_admin/container', $data);
    }

    public function login_register(){
        $data['header_src'] = $this->load->view('inc/Login_register/header_src', '', true);
        $this->load->view('Super_admin/login_register', $data);
    }

    public function admin_regi_view(){
        $data['header_src'] = $this->load->view('inc/Login_register/header_src', '', true);
        $this->load->view('Super_admin/register', $data);
    }

    public function super_admin_register(){
        $email = $this->input->post('email');
        $emailSubstr = explode("@",$email);
        $validEmail = end($emailSubstr);
        if($validEmail == 'lus.ac.bd'){
            $data['user_id']     = $this->input->post('userId');
            $data['email']       = $this->input->post('email');
            $data['password']    = $this->input->post('password');
            $data['title']       = $this->input->post('title');
            $data['group_name']  = $this->input->post('group');
        
            if($this->Author_Model->insert_entry($data)){
                $this->session->set_flashdata('reg_suc','<div class="social-icons"> Register Successfully</div>');
                redirect('admin_regi');
            }else{
                $this->session->set_flashdata('reg_err', '<div class="social-icon">Register Not Successfull</div>');
                redirect('admin_regi');
        }
        }else{
            $this->session->set_flashdata('email_valid', "Email extention lus.ac.bd");
            redirect('admin_regi');
        }
    
        
        
    }

    public function super_admin_login(){
        $data['email'] = $this->input->post('email');
        $data['password'] = $this->input->post('password');
        $data['super_admin'] = $this->input->post('super_admin');


        if($this->Author_Model->isUserLogin($data)){
            $name = $this->session->set_userdata('super_admin', $data['email']);
            $this->session->set_flashdata('log_err','<div>Login fail</div>');
            redirect('super_admin');
        }else{
            $this->session->set_flashdata('log_err','Login fail');
            redirect('login_register');
        }
    }

    public function edit($id){
        $data['header_src'] = $this->load->view('inc/Super_admin/header_src', '', true);
        $data['main_menu'] = $this->load->view('inc/Super_admin/main_menu', '', true);
        $data['sidebar'] = $this->load->view('inc/Super_admin/sidebar', '', true);
        $data['user_record'] = $this->Author_Model->slect_sigle_row($id);

       $this->load->view('Super_admin/EditUser', $data);
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
            redirect('super_admin');
        }
    }

    public function deleteMethod($id){
        if($this->Author_Model->delete($id)){
            redirect('super_admin');
        }
    }

    public function logout_super_admin(){
        $this->session->unset_userdata('super_admin');
        redirect('login_register');
    }

}

