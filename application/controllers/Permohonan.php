<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Permohonan extends CI_Controller {

	public function index()
	{
		$this->load->view('permohonan');
	}

	public function form_validation()
	{
		//echo 'OK';
		$this->load->library('form_validation');
		$this->form_validation->set_rules("full_name", "Full Name", 'required');
		$this->form_validation->set_rules("gender", "Jantina", 'required');
		$this->form_validation->set_rules("phone", "Telefon Bimbit", 'required');
		$this->form_validation->set_rules("date", "Tarikh Lahir", 'required');
		$this->form_validation->set_rules("ic", "Kad Pengenalan", 'required');
		$this->form_validation->set_rules("kelulusan", "Peringkat Kelulusan", 'required');
		$this->form_validation->set_rules("alamat", "Alamat Tetap", 'required');
		$this->form_validation->set_rules("kerja", "Pernah Bekerja", 'required');




		if($this->form_validation->run())
		{
			//true
			$this->load->model("Permohonan_model");
			$data = array(
				"full_name"		=>$this->input->post("full_name"),
				"gender"		=>$this->input->post("gender"),
				"phone"			=>$this->input->post("phone"),
				"date"			=>$this->input->post("date"),
				"ic"			=>$this->input->post("ic"),
				"ipt"			=>$this->input->post("ipt"),
				"kursus"		=>$this->input->post("kursus"),
				"grad"			=>$this->input->post("grad"),
				"kelulusan"		=>$this->input->post("kelulusan"),
				"alamat"		=>$this->input->post("alamat"),
				"syarikat"		=>$this->input->post("syarikat"),
				"pngk"			=>$this->input->post("pngk"),
				"kerja"			=>$this->input->post("kerja"),
				"sektor"		=>$this->input->post("sektor"),
				"jawatan"		=>$this->input->post("jawatan"),
				"tempoh"		=>$this->input->post("tempoh"),
				"result"		=>$this->input->post("result")


			);

			$this->Permohonan_model->insert_data($data);

			$this->session->set_flashdata('success', 'Your data have been saved.');
			redirect(base_url('permohonan'));
		}

		else
		{
			$this->session->set_flashdata('error', 'Please fill in the form');
			redirect(base_url('permohonan'));

		}
	}

}
