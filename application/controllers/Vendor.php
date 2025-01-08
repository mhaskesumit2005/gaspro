<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor extends CI_Controller
{

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

    protected function footer()

    {
        $this->load->view("vendor/footer");
    }
}
?>