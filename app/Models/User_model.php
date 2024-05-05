<?php
class User_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_users() {
        $query = $this->db->get('users');
        return $query->result_array();
    }

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

    public function update_user($data, $id) {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }

    public function delete_user($id) {
        return $this->db->delete('users', array('id' => $id));
    }

    public function get_user_by_id($id) {
    	$query = $this->db->get_where('users', array('id' => $id));
    	return $query->row_array();
    }
}
