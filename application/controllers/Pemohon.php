<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pemohon extends CI_Controller {
 
    function __construct(){
        parent::__construct();
        $this->load->model('Pemohon_model');
    }
 
    function index(){
        $this->load->view('Pemohon_view');
    }
 
    function get_data_Pemohon()
    {
        $list = $this->Pemohon_model->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $field) {
            $no++;
            $row = array();
            $row[] = $no;
            $row[] = $field->full_name;
            $row[] = $field->ic;
            $row[] = $field->gender;
            $row[] = $field->phone;
            $row[] = $field->ipt;
            $row[] = $field->kursus;
            $row[] = $field->grad;
            //$row[] = '<a class="btn btn-sm btn-primary" href="javascript:void(0)" title="Edit" onclick="edit_person('."'".$field->id."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>';
            $row[] = '<a class="btn btn-sm btn-danger" href="javascript:void(0)" title="Hapus" onclick="delete_person('."'".$field->id."'".')"><i class="glyphicon glyphicon-trash"></i> Padam</a>';
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Pemohon_model->count_all(),
            "recordsFiltered" => $this->Pemohon_model->count_filtered(),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }

     
    public function ajax_delete($id)
    {
        $this->Pemohon_model->delete_by_id($id);
        echo json_encode(array("draw" => TRUE));
    }
 
}
 