<?php
class Master_model extends CI_Model
{
    public function insert($tname, $data)
    {
        $this->db->insert($tname, $data);
        return $this->db->insert_id();
    }

    public function select($tname)
    {
        return $this->db->get($tname)->result_array();
    }

    public function select_where($tname, $cond)
    {
        return $this->db->where($cond)->get($tname)->result_array();
    }

    public function update($tname, $cond, $data)
    {
        $this->db->where($cond)->update($tname, $data);
    }

    public function delete($tname, $cond)
    {
        return $this->db->where($cond)->delete($tname);
    }

    public function update_status($driver_id, $status)
    {
        $this->db->where('driver_id', $driver_id);
        $this->db->update("driver", ["status" => $status]);
    }

    public function active_records($tname, $cond)
    {
        $status = 'Active';
        $this->db->where('status', 'active', $status, $cond);
        return $this->db->where($cond)->get($tname)->result_array();
    }
}
