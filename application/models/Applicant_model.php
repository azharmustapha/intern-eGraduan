<?php
class Applicant_model extends CI_Model{
 
private $tbl_applicant = 'users';

function __construct(){
    parent::__construct();
}

function insert_user($full_name, $gender, $phone, $date, $ic, $ipt, $kursus, $grad) {
    $data = array ('full_name' => $full_name, 'gender' => $gender, 'phone' => $phone, 'date' => $date, 'ic' => $ic, 'ipt' => $ipt, 'kursus' => $kursus, 'grad' => $grad);
    $result = $this->db->insert($this->tbl_applicant, $data);
    if ($result !== NULL){
      return TRUE;
    }
      return FALSE;
  }

 
}