<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Vendor_admin extends CI_Controller
{

    protected function navbar()
    {
        $this->load->view("vendor_admin/navbar");
    }
    public function index()
    {
        $this->navbar();
        $this->load->view("vendor_admin/dashboard");
        $this->footer();
    }

    protected function footer()

    {
        $this->load->view("vendor_admin/footer");
    }
}
?>