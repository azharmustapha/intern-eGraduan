<?php
class Industri extends CI_Controller {
  
    public function __construct()
    {
        parent::__construct();
        $this->load->model('industri_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }
  
    public function index()
    {
        $data['industri'] = $this->industri_model->industri_list();
        $data['title'] = 'Industri List';
 
        $this->load->view('industri/list', $data);
    }
  
    public function create()
    {
        $data['title'] = 'Create Industri';
        $this->load->view('industri/create', $data);
    }
      
    public function edit($id)
    {
        $id = $this->uri->segment(3);
        $data = array();
 
        if (empty($id))
        { 
         show_404();
        }else{
          $data['industri'] = $this->industri_model->get_industri_by_id($id);
          $this->load->view('industri/edit', $data);
        }
    }
    public function store()
    {
 
        $this->form_validation->set_rules('syarikat', 'Nama Syarikat', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat Syarikat', 'required');
        $this->form_validation->set_rules('phone', 'No. Telefon', 'required');
        $this->form_validation->set_rules('email', 'Alamat Email', 'required');
        $this->form_validation->set_rules('tahun', 'Tahun Ditubuhkan', 'required');

        $id = $this->input->post('id');
 
        if ($this->form_validation->run() === FALSE)
        {  
            if(empty($id)){
              redirect( base_url('industri/create') ); 
            }else{
             redirect( base_url('industri/edit/'.$id) ); 
            }
        }
        else
        {
            $data['industri'] = $this->industri_model->createOrUpdate();
            redirect( base_url('industri') ); 
        }
         
    }
     
     
    public function delete()
    {
        $id = $this->uri->segment(3);
         
        if (empty($id))
        {
            show_404();
        }
                 
        $industri = $this->industri_model->delete($id);
         
        redirect( base_url('industri') );        
    }
}