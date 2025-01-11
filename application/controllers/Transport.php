<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transport extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['role'])) {
            redirect(base_url() . "login");
            exit;
        }
        if ($_SESSION['role'] != 'Transport') {
            redirect(base_url() . "login");
            exit;
        }
    }
    
    protected function navbar()
    {
        $this->load->view("transport/navbar");
    }

    public function index()
    {
        $this->navbar();
        $this->load->view('transport/dashboard');
        $this->footer();
    }

    protected function footer()
    {
        $this->load->view("transport/footer");
    }
}
