<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function index() {
        $data['users'] = $this->user_model->get_users();
        $this->load->view('users_list', $data);
    }

    public function add_user() {
        $data = array(
            'username' => 'JohnDoe',
            'email' => 'johndoe@example.com',
            'password' => 'password123'
        );
        $this->user_model->insert_user($data);
    }

    public function update_user($id) {
        $data = array(
            'username' => 'UpdatedName',
            'email' => 'updatedemail@example.com'
        );
        $this->user_model->update_user($data, $id);
    }

    public function delete_user($id) {
        $this->user_model->delete_user($id);
    }
}
