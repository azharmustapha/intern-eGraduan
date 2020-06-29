<?php
class Notes_model extends CI_Model {
  
    public function __construct()
    {
        $this->load->database();
    }
     
    public function notes_list()
    {
        $query = $this->db->get('tbl_notes');
        return $query->result();
    }
     
    public function get_notes_by_id($id)
    {
        $query = $this->db->get_where('tbl_notes', array('id' => $id));
        return $query->row();
    }
     
    public function createOrUpdate()
    {
        $this->load->helper('url');
        $id = $this->input->post('id');
 
        $data = array(
            'title' => $this->input->post('title'),
            'jawatan' => $this->input->post('jawatan'),
            'description' => $this->input->post('description'),
            'linkk' => $this->input->post('linkk')

        );
        if (empty($id)) {
            return $this->db->insert('tbl_notes', $data);
        } else {
            $this->db->where('id', $id);
            return $this->db->update('tbl_notes', $data);
        }
    }
     
    public function delete($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('tbl_notes');
    }
}