<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('notes_model');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }
 
  function index(){
    //Allowing akses to admin only
      if($this->session->userdata('level')==='1'){
        $data['notes'] = $this->notes_model->notes_list();
        $data['title'] = 'Notes List';
        $this->load->view('dashboard_view', $data);
      }else{
          echo "Access Denied";
      }
 
  }
 
  //function staff(){
    //Allowing akses to staff only
  //  if($this->session->userdata('level')==='2'){
  //    $this->load->view('dashboard_view');
  //  }else{
  //      echo "Access Denied";
  //  }
  //}
 
  function author(){
    //Allowing akses to author only
    if($this->session->userdata('level')){
      $data['notes'] = $this->notes_model->notes_list();
      $data['title'] = 'Notes List';
      $this->load->view('dashboard_view', $data);
    }else{
        echo "Access Denied";
    }
  }
 
}