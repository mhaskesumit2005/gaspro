<?php

class Login_model extends CI_Model
{
    public function get_admin_by_id($account_id)
    {
        return $this->db->where('account_id', $account_id)->get('account')->row_array();
    }

    public function update_admin_password($admin_id, $update_data)
    {
        return $this->db->where('account_id', $admin_id)->update('account', $update_data);
    }

    public function validation_account($username, $password)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('account');

        if ($query->num_rows() > 0) {
            $account = $query->row_array();
            if (password_verify($password, $account['password'])) {
                return $account;
            }
        }
        return false;
    }
}
?>