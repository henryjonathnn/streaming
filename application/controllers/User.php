<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->library('session');
    }

    public function index()
    {

    }

    public function tambah_user()
    {
        $password1 = $this->input->post('password');
        $password2 = $this->input->post('retype-password');
        $term = $this->input->post('terms');
        
        if($term !== null) 
        {
        if($password1 == $password2){
            $simpan_user = $this->user_model->store();
            if($simpan_user){
                $this->session->set_flashdata('message', 'success register');
                redirect('admin/login');
            }else{
        redirect('admin/register');
        $this->session->set_flashdata('message', 'error register');
            }
        }else{
            $this->session->set_flashdata('message', 'error password');
        redirect('admin/register');
        }
    }else{
        $this->session->set_flashdata('message', 'error term');
        redirect('admin/register');
    }
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if($username == null && $password == null){
            $this->session->set_flashdata('message','error kosong');
            redirect('admin/login');

        }elseif($username != null && $password == null){   
            $this->session->set_flashdata('message','error password');
            redirect('admin/login');

        }elseif($username == null && $password != null){
            $this->session->set_flashdata('message','error username');
            redirect('admin/login');

        }else{
            echo "login";
        }
    }
}

/* End of file User.php and path \application\controllers\User.php */
