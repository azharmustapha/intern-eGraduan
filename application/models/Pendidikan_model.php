<?php
class Pendidikan_model extends CI_Model{
 
  function insert_data($data)
  {
      $this->db->insert("tbl_education", $data);
  }
 
}