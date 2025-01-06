<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Load Login_model
        $this->load->model('Login_model');
        // Start the session manually if not already started
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function index()
    {
        // Load the login view
        $this->load->view('login');
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        // Fetch user details from the database
        $user = $this->Login_model->getUserByUsername($username);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Set session data using $_SESSION
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['logged_in'] = true;

                // Redirect based on role
                switch ($user['role']) {
                    case 'MasterAdmin':
                        redirect('/master-admin/dashboard');
                        break;
                    case 'TransportAdmin':
                        redirect('/transport-admin/dashboard');
                        break;
                    case 'VendorAdmin':
                        redirect('/vendor-admin/dashboard');
                        break;
                    default:
                        redirect('/login');
                        break;
                }
            } else {
                $_SESSION['error'] = 'Incorrect password.';
                redirect('/login');
            }
        } else {
            $_SESSION['error'] = 'User not found.';
            redirect('/login');
        }
    }

    public function logout()
    {
        // Clear all session variables and destroy the session
        session_unset();
        session_destroy();
        redirect('/login');
    }
}
?>
