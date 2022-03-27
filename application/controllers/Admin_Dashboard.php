<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin_Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_DataPengguna');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['title'] = 'Admin Dashboard';

        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('admin/admin_dashboard');
        $this->load->view('template/footer_admin');
    }
    public function datapengguna()
    {


        $data['title'] = 'Data Pengguna';
        $data['pengguna'] = $this->M_DataPengguna->getAllPengguna();
        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('admin/datapengguna');
        $this->load->view('template/footer_admin');
    }
    public function adminperjalanan()
    {


        $data['title'] = 'Data Pengguna';
        $data['perjalanan'] = $this->M_DataPengguna->getAllPerjalanan();
        $this->load->view('template/header_admin', $data);
        $this->load->view('template/sidebar_admin', $data);
        $this->load->view('admin/adminperjalanan');
        $this->load->view('template/footer_admin');
    }
}
