<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Authentication');
	}
    public function admin_page()
	{
        $data['admin_title'] = 'Admin Panel';
		$this->load->view('templates/header',$data);
		$this->load->view('pages/admin_page');
		$this->load->view('templates/footer');
	}
}
