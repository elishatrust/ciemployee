<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller{
    
    // --- show all data ----
    public function index(){
        $data['table_title'] = 'ALL EMPLOYEE';
        $this->load->helper('url');
        $this->load->view('templates/header',$data);
        $this->load->model('EmployeeModel');
        $value['empValue'] = $this->EmployeeModel->getData();
        $this->load->view('fontend/employee',$value);
        $this->load->view('templates/footer');


    }
    // --- create data ----
    public function create(){

        $data['form_title'] = 'Registration Form';
        $this->load->helper('url');
        $this->load->view('templates/header');
        $this->load->view('fontend/create',$data);
        $this->load->view('templates/footer');
    }
    // --- store data ----
    public function store(){

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->form_validation->set_rules('first_name', 'First name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        
        if ($this->form_validation->run())
        {
            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
            ];
            $this->load->model('EmployeeModel', 'emp');
            $this->emp->insertData($data);
            // ---- Flash message ----
            $this->session->set_flashdata('added', 'Record added successfully');
            redirect(base_url('employee'));
        }else{
            redirect(base_url('employee/create'));
        }
    }
    // --- edit data ----
    public function edit($id){
        $data['form_edit'] = 'Edit Employee';

        $this->load->helper('url');
        $this->load->view('templates/header',$data);
        $this->load->model('EmployeeModel');
        $value['val'] = $this->EmployeeModel->editData($id);
        $this->load->view('fontend/edit',$value);
        $this->load->view('templates/footer');
    }
    // --- update data ----
    public function update($id){

        $this->form_validation->set_rules('first_name', 'First name', 'required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required');
        $this->form_validation->set_rules('address', 'Address', 'required');
        
        if ($this->form_validation->run()){

            $data = [
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'address' => $this->input->post('address'),
            ];
    
            $this->load->model('EmployeeModel');
            $this->EmployeeModel->updateData($id, $data);
            // ---- Flash message ------
            $this->session->set_flashdata('update', 'Record updated successfully');
            redirect(base_url('employee'));
        }else{
            $this->edit($id);
        }
        
    }
    // --- view data ----
    public function view($id){
        $data['profile'] = 'Employee Profile';

        $this->load->view('templates/header',$data);
        $this->load->model('EmployeeModel');
        $value['empProf'] = $this->EmployeeModel->viewProfile($id);
        $this->load->view('fontend/view',$value);
        $this->load->view('templates/footer');
    }
    // --- delete data ----
    public function delete($id){

        $this->load->model('EmployeeModel');
        $this->EmployeeModel->deleteData($id);
        // ---- Flash message ---
        $this->session->set_flashdata('delete', 'Record deleted successfully');
        redirect(base_url('employee'));
    }

}
?>