<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

    }

    public function login()
    {
        $data['title'] = "Login Form";
        $this->load->view('login/template/header',$data);
        $this->load->view('login/login');
        $this->load->view('login/template/footer');
    }
    public function register()
    {
        $data['title'] = "Register Form";
        $this->load->view('login/template/header',$data);
        $this->load->view('login/register');
        $this->load->view('login/template/footer');
    }
    public function forgot_password()
    {
        $data['title'] = "Change Password";
        $this->load->view('login/template/header',$data);
        $this->load->view('login/forgot_password');
        $this->load->view('login/template/footer');
    }
}

/* End of file Admin.php and path \application\controllers\Admin.php */
