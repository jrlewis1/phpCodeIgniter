<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_data extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_data_model');
        $this->load->model('user_model');
        $this->load->library('session');
    }

    public function add_data() {
        // Check if user is logged in
        $user_id = $this->session->userdata('user_id');
        if (!$user_id) {
            // Redirect or show login page
            redirect('login');
        }

        // Get user details
        $user = $this->user_model->get_user_by_id($user_id);

        // Example data
        $data = array(
            'user_id' => $user_id,
            'data_field' => 'Some data related to the user', // Modify this as needed
        );

        $this->user_data_model->insert_user_data($data);
    }

    // Add more functions as needed (update, delete, etc.)
}
