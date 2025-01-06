<?php

class Login_model extends CI_Model
{
    protected $table = 'account';

    public function getUserByUsername($username)
    {
        return $this->db->where('username', $username)->get($this->table)->row_array();
    }
}
?>
