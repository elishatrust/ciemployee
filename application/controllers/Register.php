<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }
	public function index()
	{
        $data['form_title'] = 'Registration Form';

        $this->load->helper('url');
        $this->load->view('templates/header');
		$this->load->view('auth/register',$data);
        $this->load->view('templates/footer');
	}
    public function reg(){

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('first_name', 'First name', 'trim|required|alpha');
        $this->form_validation->set_rules('last_name', 'Last name', 'trim|required|alpha');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('password2', 'Confirm password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('address', 'Address', 'trim|required');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'address' => $this->input->post('address'),
            ];
            $this->load->model('UserModel');
            $checking = $this->UserModel->register($data);
            if($checking){
                $this->session->set_flashdata('register','Registered successful, Login now');
                redirect(base_url('login'));
            }else{
                $this->session->set_flashdata('register','Registration fail');
                redirect(base_url('register'));
            }
        }
    }
}
