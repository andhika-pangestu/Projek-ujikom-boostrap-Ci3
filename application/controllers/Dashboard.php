<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_CatatanPerjalanan');
        $this->load->library('form_validation');
        $this->load->library('pdf');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('user/index');
        $this->load->view('template/footer');
    }

    public function report()
    {

        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required|trim', [
            'required' => 'Tanggal wajib diisi'
        ]);
        $this->form_validation->set_rules('jam', 'Jam', 'required|trim', [
            'required' => 'Jam wajib diisi'
        ]);
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'required|trim', [
            'required' => 'Lokasi wajib diisi'
        ]);
        $this->form_validation->set_rules('suhu_tubuh', 'Suhu_tubuh', 'required|trim|exact_length[2]', [
            'required' => 'Suhu wajib diisi',
            'exact_length' => 'Masukan suhu tubuh dengan benar'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Isi Data Perjalanan';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar');
            $this->load->view('user/report');
            $this->load->view('template/footer');
        } else {
            $data = [
                'tanggal' => $this->input->post('tanggal', true),
                'jam' => htmlspecialchars($this->input->post('jam', true)),
                'lokasi' => $this->input->post('lokasi', true),
                'suhu_tubuh' => $this->input->post('suhu_tubuh', true),
                'id_user' => $this->session->userdata('id')
            ];
            $this->db->insert('tbcatatanperjalanan', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"> <span class="alert-icon"><i class="ni ni-like-2"></i></span>Selamat! Data Berhasil disimpan</div>');
            redirect('dashboard/report');
        }
    }

    public function dataperjalanan()
    {


        $data['title'] = 'Data Perjalanan';
        $data['catatan'] = $this->M_CatatanPerjalanan->getAllCatatan();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar');
        $this->load->view('user/dataperjalanan');
        $this->load->view('template/footer');
    }
}
