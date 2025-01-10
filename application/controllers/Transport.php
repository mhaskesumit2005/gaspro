<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transport extends CI_Controller
{
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
?>