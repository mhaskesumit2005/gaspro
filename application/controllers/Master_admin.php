<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master_admin extends CI_Controller
{
    protected function navbar()
    {
        $this->load->view("master_admin/navbar");
    }

    public function index()
    {
        $this->navbar();
        $this->load->view('master_admin/dashboard');
        $this->footer();
    }

    public function admin_profile()
    {
        $this->navbar();
        $this->load->view("master_admin/admin_profile");
        $this->footer();
    }
    
    protected function footer()
    {
        $this->load->view("master_admin/footer");
    }
}
?>