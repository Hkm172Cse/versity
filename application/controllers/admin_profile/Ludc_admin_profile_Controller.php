<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ludc_admin_profile_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();

		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));

        if(!$this->session->has_userdata('ludc_admin')){
            redirect('ludc_admin_panel');
        }

		$this->load->model('Post_Model');
        $this->load->Model('Author_Model');
        $this->load->Model('LUDC_Model');
	}

    public function index(){
        $data['header'] = $this->load->view('inc/notice/header', '', true);
        $data['footer'] = $this->load->view('inc/notice/footer_src', '', true);
        $profile_info   = $this->session->userdata('ludc_admin');
        $data['profile_data'] = $this->LUDC_Model->profile_login($profile_info);
        $this->load->view('admin_profiles/ludc_admin_profile', $data);
    }

    public function change_profile_method(){
               $data['id'] = $this->input->post('profile_id');
               $data['name'] = $this->input->post('name');
               $data['user_id'] = $this->input->post('user');
               $data['password'] = $this->input->post('password');
               $data['batch'] = $this->input->post('batch');
               $data['section'] = $this->input->post('section');
               $data['department'] = $this->input->post('department');
               $data['address'] = $this->input->post('address');
               $data['email'] = $this->input->post('email');
               $data['contact'] = $this->input->post('mobile');

               
              
                $sdata = array();
                $config['upload_path']          = 'image/';
                $config['allowed_types']        = 'gif|jpg|png';
               

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('image'))
                {
                        $error = array('error' => $this->upload->display_errors());

                       
                }
                else
                {
                        $sdata =  $this->upload->data();
                        $data['image'] = $config['upload_path'].$sdata['file_name'];

                        if($this->LUDC_Model->update($data)){
                            redirect('ludc_admin_panel');
                        }
                       
                }

                if($this->LUDC_Model->update($data)){
                    redirect('ludc_admin_panel');
                }

    }
}

