<?php

class Login_model extends CI_Model
{
    public function check_login($username, $password) {
        // Fetch user data based on username
        $this->db->where('username', $username);
        $query = $this->db->get('account');

        $user = $query->row();

        // Validate user exists and password matches
        if ($user && password_verify($password, $user->password)) {
            return $user; // Return user data if credentials match
        }

        return false; // Login failed
    }
}
?>
