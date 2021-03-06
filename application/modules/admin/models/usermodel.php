<?php
class Usermodel extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
    
    function get_users()
    {
        $query = $this->db->query("SELECT u.user_id, u.user_fname, u.user_email, u.user_status, r.role_name FROM users u, roles r WHERE u.user_role = r.role_id");
        $data = $query->result();
        return $data;
    }

    function get_users_count() {
        $query = $this->db->query("SELECT u.user_id, u.user_fname, u.user_email, u.user_status, r.role_name FROM users u, roles r WHERE u.user_role = r.role_id");
        return $query->num_rows();
    }

    function get_designers() {
        $query = $this->db->query("SELECT u.user_id, u.user_fname, u.user_email, u.user_status, r.role_name FROM users u, roles r WHERE u.user_role = r.role_id AND r.role_id = 2");
        $data = $query->result();
        return $data;

    }
}