<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }

    public function login_proces()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if (empty($username) || empty($password)) {
            echo "Username and password are required.";
            return;
        }

        $this->load->model('Login_model');

        $account = $this->Login_model->validation_account($username, $password);

        if ($account) {
            $_SESSION['account_id'] = $account['account_id'];
            $_SESSION['username'] = $account['username'];
            $_SESSION['role'] = $account['role'];

            switch ($account['role']) {
                case 'Master':
                    redirect('master/index');
                    break;
                case 'Vendor':
                    redirect('vendor/index');
                    break;
                case 'Transport':
                    redirect('transport/index');
                    break;
                default:
                    echo "Role not defined.";
                    break;
            }
        } else {
            echo "Invalid username or password.";
            redirect('login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}
