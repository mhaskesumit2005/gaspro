<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {
        $this->load->view('login');
    }
    public function login_proces()
    {
        // session id 
        echo "<pre>";
        print_r($_POST);
    }
}
?>