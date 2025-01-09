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

    public function profile()
    {
        $this->navbar();
        $this->load->view("master/profile");
        $this->footer();
    }
    
    public function setting()
    {
        $this->navbar();$this->load->view("master/setting");$this->footer();
    }
    protected function footer()
    {
        $this->load->view("master/footer");
    }
    // Driver controllers
    public function driver()
    {
        $this->navbar();
        $this->load->view('master/driver');
        $this->footer();
    }
}
?>