<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Authentication');
	}
    public function user_page()
	{
        $data['user_title'] = 'User Panel';
		$this->load->view('templates/header',$data);
		$this->load->view('pages/user_page');
		$this->load->view('templates/footer');
	}
}
