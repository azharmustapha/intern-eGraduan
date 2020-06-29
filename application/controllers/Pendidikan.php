<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	public function index()
	{
		$this->load->view('pendidikan');
	}

	public function form_validation()
	{
		//echo 'OK';
		$this->load->library('form_validation');
		$this->form_validation->set_rules("ipt", "Universiti", 'required');
		$this->form_validation->set_rules("kursus", "Kursus", 'required');
		$this->form_validation->set_rules("grad", "Tahun Graduasi", 'required');


		if($this->form_validation->run())
		{
			//true
			$this->load->model("Pendidikan_model");
			$data = array(
				"ipt"		=>$this->input->post("ipt"),
				"kursus"	=>$this->input->post("kursus"),
				"grad"		=>$this->input->post("grad")

			);

			$this->Pendidikan_model->insert_data($data);

			$this->session->set_flashdata('success', 'Your data have been saved.');
			redirect(base_url('pendidikan'));
		}

		else
		{
			$this->session->set_flashdata('error', 'Please fill in the form');
			redirect(base_url('pendidikan'));

		}
	}

}

