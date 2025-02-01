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

    public function profile()
    {
        $data['driver'] = $this->Transport_model->select("driver");
        $this->navbar();
        $this->load->view("transport/profile", $data);
        $this->footer();
    }

    public function save_profile()
    {
        if ($_FILES['driver_photo']['name'] != '') {
            $filename = time() . $_FILES['driver_photo']['name'];
            move_uploaded_file($_FILES['driver_photo']['tmp_name'], "uploads/" . $filename);
            $_POST['driver_photo'] = $filename;
        }
        if ($_FILES['license_photo']['name'] != '') {
            $filename = time() . $_FILES['license_photo']['name'];
            move_uploaded_file($_FILES['license_photo']['tmp_name'], "uploads/" . $filename);
            $_POST['license_photo'] = $filename;
        }
        if ($_FILES['aadhaar_photo']['name'] != '') {
            $filename = time() . $_FILES['aadhaar_photo']['name'];
            move_uploaded_file($_FILES['aadhaar_photo']['tmp_name'], "uploads/" . $filename);
            $_POST['aadhaar_photo'] = $filename;
        }
        $this->Transport_model->update("driver", ["driver_id" => 1], $_POST);

        redirect(base_url() . "transport/profil e");
    }

    public function setting()
    {
        $this->navbar();
        $this->load->view("transport/setting");
        $this->footer();
    }
    protected function footer()
    {
        $this->load->view("transport/footer");
    }
}
