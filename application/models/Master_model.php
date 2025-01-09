<?php
class Master_model extends CI_Model
{
    public function insert($tname,$data)
    {
        $this->db->insert($tname,$data);
        return $this->db->insert_id();
    }
    public function select($tname)
    {
        return $this->db->get($tname)->result_array();
    }
}
?>