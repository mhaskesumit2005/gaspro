<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['role'])) {
            redirect(base_url() . "login");
            exit;
        }
        if ($_SESSION['role'] != 'Master') {
            redirect(base_url() . "login");
            exit;
        }
    }
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
        $this->navbar();
        $this->load->view("master/setting");
        $this->footer();
    }


    // Driver controllers
    public function driver()
    {
        $data['driver'] = $this->Master_model->active_records("driver", array('status' => 'active'));
        $this->navbar();
        $this->load->view('master/driver', $data);
        $this->footer();
    }

    public function save_driver()
    {
        $this->Master_model->insert("driver", $_POST);
        redirect(base_url() . "master/driver");
    }
    // public function delete_driver($driver_id)
    // {
    //     $cond = ["driver_id" => $driver_id];
    //     $this->Master_model->delete("driver", $cond);
    //     redirect(base_url() . "master/driver");
    // }

    public function delete_driver($driver_id)
    {
        $this->Master_model->update_status($driver_id, 'Deactive');


        $this->session->set_flashdata("success");

        if (isset($_SERVER['HTTP_REFERER'])) {
            header(header: "Location:" . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            echo "<script>history.back();</script>";
            exit;
        }
    }
    // vendor
    public function vendor()
    {
        $this->navbar();
        $data['vendor'] = $this->Master_model->select("vendor");
        $this->load->view("master/vendor", $data);
        $this->footer();
    }
    public function save_vendor()
    {
        $this->Master_model->insert("vendor", $_POST);
        redirect(base_url() . "master/vendor");
    }
    //cylinder
    public function cylinder()
    {
        $this->navbar();
        $data['gas']=$this->Master_model->select("gas");
        $this->load->view("master/cylinder",$data);
        $this->footer();
    }
    public function save_gas()
    {
        $this->Master_model->insert("gas", $_POST);
        redirect(base_url()."master/cylinder");
    }
    protected function footer()
    {
        $this->load->view("master/footer");
    }
}
