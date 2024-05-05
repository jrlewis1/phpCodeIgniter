<?php
class User_data_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function insert_user_data($data) {
        return $this->db->insert('user_data', $data);
    }

    // Add more functions as needed (update, delete, get by user ID, etc.)
}
