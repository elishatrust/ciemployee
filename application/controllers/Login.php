<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // if($this->sessin->has_userdata('authenticated')){
        //     $this->session->set_flashdata('success', 'You are already loggedin');
        //     redirect(base_url('user_page'));
        // }
        // if($this->sessin->has_userdata('authenticated') == '2'){
        //     $this->session->set_flashdata('success', 'You are already loggedin');
        //     redirect(base_url('admin_page'));
        // }

        //$this->load->model('User');
    }
    public function index(){
        $data['form_title'] = 'Login';
        $this->load->view('templates/header',$data);
        $this->load->view('auth/login');
        $this->load->view('templates/footer');
    }
    public function log(){

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email','Email address','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');

        if($this->form_validation->run() == FALSE){
            //fail
            $this->index();
        }else{
            //pass
            $data = [
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
            ];
            $this->load->model('UserModel');
            $result = $this->UserModel->login($data);
            
            if($result != FALSE){

                $auth_userdetails = [
                    'first_name' => $result->first_name,
                    'last_name' => $result->last_name,
                    'email' => $result->email,
                ];
                $this->session->set_userdata('authenticated','1');
                $this->session->set_userdata('auth_user',$auth_userdetails);
                $this->session->set_flashdata('success', 'You are loggedin successfully');
                redirect(base_url('user_page'));

            }else{
                $this->session->set_flashdata('login','Incorrect email or password');
                $this->index();
            }
        }
        
        
    }

}


?>