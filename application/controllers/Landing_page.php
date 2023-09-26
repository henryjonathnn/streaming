<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing_page extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('landing_page/template/header');
        $this->load->view('landing_page/landing_page');
        $this->load->view('landing_page/template/footer');
    }
}

/* End of file Landing_page.php and path \application\controllers\Landing_page.php */
