<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_contacts()
    {
        $query = $this->db->get('contact');
        return $query->result_array();
    }

    public function create_contact($data)
    {
        return $this->db->insert('contact', $data);
    }

    public function get_contact_by_id($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('contact');
        return $query->row_array();
    }

    public function update_contact($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('contact', $data);
    }

    public function delete_contact($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contact');
    }
}
