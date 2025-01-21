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

        // Validate input
        if (empty($username) || empty($password)) {
            $this->session->set_flashdata('error', 'Username and password are required.');
            redirect('login');
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
                    $this->session->set_flashdata('error', 'Role not defined.');
                    redirect('login');
                    break;
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password.');
            redirect('login');
        }
    }

    public function logout()
    {
        session_destroy();
        redirect('login');
    }
}
?>