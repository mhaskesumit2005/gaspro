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
    protected function footer()
    {
        $this->load->view("master/footer");
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
<<<<<<< HEAD
=======
    // public function delete_driver($driver_id)
    // {
    //     $cond = ["driver_id" => $driver_id];
    //     $this->Master_model->delete("driver", $cond);
    //     redirect(base_url() . "master/driver");
    // }
>>>>>>> 8fa0deb4235cd8b182d89df3da84ee030756c893

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
        $data['vendor']=$this->Master_model->select("vendor");
        $this->load->view("master/vendor",$data);
        $this->footer();
    }
    public function save_vendor()
    {
<<<<<<< HEAD
        $this->Master_model->insert("vendor", $_POST);
        // redirect(base_url()."master/vendor");
        print_r($_POST);
=======
        $this->Master_model->insert("vendor",$_POST);
        redirect(base_url()."master/vendor");
        // print_r($_POST);
>>>>>>> 8fa0deb4235cd8b182d89df3da84ee030756c893
    }
}
