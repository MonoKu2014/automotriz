<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct()
    {
            parent::__construct();
            if(is_logged_in() === false)
                redirect(base_url());
    }

    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/left');
        $this->load->view('main/inicio');
        $this->load->view('includes/footer');
    }
}
