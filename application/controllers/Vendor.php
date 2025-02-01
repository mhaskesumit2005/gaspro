<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['role'])) {
            redirect(base_url() . "login");
            exit;
        }
        if ($_SESSION['role'] != 'Vendor') {
            redirect(base_url() . "login");
        }
    }
    protected function navbar()
    {
        $this->load->view("vendor/navbar");
    }
    public function index()
    {
        $this->navbar();
        $this->load->view("vendor/dashboard");
        $this->footer();
    }

    public function profile()
    {
        $this->navbar();
        $this->load->view("vendor/profile");
        $this->footer();
    }

    public function setting()
    {
        $this->navbar();
        $this->load->view("vendor/setting");
        $this->footer();
    }
    
    protected function footer()
    {
        $this->load->view("vendor/footer");
    }
}
