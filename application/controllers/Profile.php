<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_UserProfil');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'profile';
        $data['profile'] = $this->M_UserProfil->getAllProfile();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('user/profile');
        $this->load->view('template/footer');
    }
}
