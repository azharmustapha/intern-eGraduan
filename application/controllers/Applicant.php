<?php

class Applicant extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Applicant_Model');	
	}

	public function index()
	{
		if ($this->input->post('finish')){
		//echo 'OK';
		$this->load->library('form_validation');
		$this->form_validation->set_rules("full_name", "Full Name", 'required');
		$this->form_validation->set_rules("gender", "Jantina", 'required');
		$this->form_validation->set_rules("phone", "Telefon Bimbit", 'required|numeric');
		$this->form_validation->set_rules("date", "Tarikh Lahir", 'required');
		$this->form_validation->set_rules("ic", "Kad Pengenalan", 'required|numeric');
		$this->form_validation->set_rules("ipt", "Universiti", 'required');
		$this->form_validation->set_rules("kursus", "Kursus", 'required');
		$this->form_validation->set_rules("grad", "Tahun Graduasi", 'required');


		if($this->form_validation->run() !== FALSE){
			$result = $this->Applicant_Model->insert_user($this->input->post('full_name'), $this->input->post('gender'), $this->input->post('phone'), $this->input->post('date'), $this->input->post('ic'), $this->input->post('ipt'), $this->input->post('kursus'), $this->input->post('grad'));
			$data['success'] = $result;
			$this->load->view('applicant', $data);
		}else{
			$this->load->view('applicant');
		}
		} else {
			$this->load->view('applicant');
		}
	}
}