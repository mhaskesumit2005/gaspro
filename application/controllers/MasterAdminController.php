<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MasterAdminController extends CI_Controller
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

    protected function footer()
    {
        $this->load->view("master_admin/footer");
    }
}
?>