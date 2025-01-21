<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Master extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Ensure session is started
        if (!isset($_SESSION['role'])) {
            redirect(base_url() . "login");
            exit;
        }

        // Restrict access to Master role only
        if ($_SESSION['role'] !== 'Master') {
            redirect(base_url() . "login");
            exit;
        }
    }

    public function update_password()
    {
        // Validate required fields
        if (
            $this->input->post('current_id') && $this->input->post('current_password') &&
            $this->input->post('new_password') && $this->input->post('confirm_password')
        ) {

            $current_id = $this->input->post('current_id');
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password');
            $confirm_password = $this->input->post('confirm_password');

            // Fetch admin data
            $admin_data = $this->Login_model->get_admin_by_id($current_id);

            if ($admin_data) {
                // Verify current password
                if (password_verify($current_password, $admin_data['password'])) {
                    if ($new_password === $confirm_password) {
                        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                        $update_data = ['password' => $hashed_password];

                        if ($this->Login_model->update_admin_password($current_id, $update_data)) {
                            $this->session->set_flashdata('success', 'Password updated successfully');
                            redirect(base_url() . "login");
                        } else {
                            $this->session->set_flashdata('error', 'Failed to update password.');
                            redirect(base_url() . "master/setting");
                        }
                    } else {
                        $this->session->set_flashdata('error', 'New password and confirm password do not match.');
                        redirect(base_url() . "master/setting");
                    }
                } else {
                    $this->session->set_flashdata('error', 'Current password is incorrect.');
                    redirect(base_url() . "master/setting");
                }
            } else {
                $this->session->set_flashdata('error', 'Admin not found.');
                redirect(base_url() . "master/setting");
            }
        } else {
            $this->session->set_flashdata('error', 'All fields are required.');
            redirect(base_url() . "master/setting");
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
        $data['gas'] = $this->Master_model->select("gas");
        $this->load->view("master/cylinder", $data);
        $this->footer();
    }
    public function save_gas()
    {
        $this->Master_model->insert("gas", $_POST);
        redirect(base_url() . "master/cylinder");
    }
    public function delete_gas($id)
    {
        $cond = ['gas_id' => $id];
        $this->Master_model->delete("gas", $cond);
        redirect(base_url() . "master/cylinder");
    }
    protected function footer()
    {
        $this->load->view("master/footer");
    }
}
