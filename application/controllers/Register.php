<?php

class Register extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        //$this->load->library('encrypt');
        $this->load->model('register_model');
    }

    function index()
    {
        $this->load->view('register');
    }

    function validation()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_name', 'Nama', 'required|trim');
        $this->form_validation->set_rules('user_ic', 'Kad Pengenalan', 'required|trim|numeric');
        $this->form_validation->set_rules('user_email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        
        if($this->form_validation->run())
        {
            $this->load->model("Register_model");
            $data = array(
                'user_name'      => $this->input->post('user_name'),
                'user_ic'        => $this->input->post('user_ic'),
                'user_email'     => $this->input->post('user_email'),
                'user_password'  => $this->input->post('user_password')
            );

            $id = $this->Register_model->insert_data($data);
            if($id > 0)
            {
                $this->session->set_flashdata('success', 'Successfully Register');
                redirect(base_url('login'));
            }

            }
            else
            {
                $this->session->set_flashdata('error', 'Please fill in the form');
                redirect(base_url('register'));        
            }
        }
 
} 