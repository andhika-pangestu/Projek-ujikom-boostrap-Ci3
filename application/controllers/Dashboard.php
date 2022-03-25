<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_CatatanPerjalanan');
        $this->load->library('form_validation');
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
            $this->load->view('template/header',);
            $this->load->view('template/sidebar');
            $this->load->view('user/index');
            $this->load->view('template/footer');
        } else {
            $data = [
                'tanggal' => htmlspecialchars($this->input->post('nama', true)),
                'jam' => htmlspecialchars($this->input->post('jam', true)),
                'lokasi' => htmlspecialchars($this->input->post('lokasi', true)),
                'suhu_tubuh' => htmlspecialchars($this->input->post('suhu_tubuh', true)),
            ];
            $this->db->insert('tbcatatanperjalanan', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">Selamat! Data Berhasil disimpan</div>');
            redirect('dashboard');
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
