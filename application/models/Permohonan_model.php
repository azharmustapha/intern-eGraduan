<?php
class Permohonan_model extends CI_Model{
 
  function insert_data($data)
  {
      $this->db->insert("tbl_applicant", $data);
  }
 
}