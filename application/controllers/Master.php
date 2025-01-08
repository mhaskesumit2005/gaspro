<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    protected function navbar()
    {
        $this->load->view("master/navbar");
    }

    public function index()
    {
        $this->navbar();
        $this->load->view('master/dashboard');
        $this->footer();
    }

    public function master_profile()
    {
        $this->navbar();
        $this->load->view("master/master_profile");
        $this->footer();
    }
    
    protected function footer()
    {
        $this->load->view("master/footer");
    }
}
?>