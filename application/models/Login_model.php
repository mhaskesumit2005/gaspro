<?php

class Login_model extends CI_Model
{
    public function validate_user($username, $password)
    {
        // Query the database for the user
        $this->db->where('username', $username);
        $query = $this->db->get('account'); // Replace 'account' with your table name

        if ($query->num_rows() === 1) {
            $user = $query->row_array();

            // Verify password (if hashed)
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }

        return false; // No match found
    }
}
?>
