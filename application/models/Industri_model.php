<?php
class Industri_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function industri_list()
    {
        $query = $this->db->get('tbl_industri');
        return $query->result();
    }
     
    public function get_industri_by_id($id)
    {
        $query = $this->db->get_where('tbl_industri', array('id' => $id));
        return $query->row();
    }
     
    public function createOrUpdate()
    {
        $this->load->helper('url');
        $id = $this->input->post('id');
 
        $data = array(
            'syarikat' => $this->input->post('syarikat'),
            'alamat' => $this->input->post('alamat'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'tahun' => $this->input->post('tahun')

        );
        if (empty($id)) {
            return $this->db->insert('tbl_industri', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('tbl_industri', $data);
        }
    }
     
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tbl_industri');
    }
}