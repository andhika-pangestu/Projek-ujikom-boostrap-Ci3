<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|exact_length[16]', [
            'required' => 'NIK Wajib Diisi',
            'exact_length' => 'Nik yang kamu masukan salah',
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
            'required' => 'Nama Wajib Diisi',

        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('auth/login');
            $this->load->view('template/auth_header');
            $this->load->view('template/auth_footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');

        $user = $this->db->get_where('tbuser', ['nik' => $nik])->row_array();
        $user = $this->db->get_where('tbuser', ['nama' => $nama])->row_array();


        if ($user) {

            $data = [
                'id' => $user['id'],
                'nik' => $user['nik'],
                'nama' => $user['nama']
            ];
            $this->session->set_userdata($data);
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Nik atau Nama Salah</div>');
            redirect('auth');
        }
    }


    function alpha_dassh($str)
    {
        return (!preg_match('/^[a-zA-Z\s]+$/', $str)) ? FALSE : TRUE;
    }

    public function register()
    {

        $this->form_validation->set_rules('nama', 'Nama', 'required|trim|callback_alpha_dassh', [
            'required' => 'Nama Wajib Diisi',
            'alpha_dassh' => 'Mohon Masukan Nama dengan Benar'
        ]);



        $this->form_validation->set_rules('nik', 'Nik', 'required|trim|exact_length[16]|is_unique[tbuser.nik]', [
            'required' => 'NIK Wajib Diisi',
            'exact_length' => 'Masukan Nik dengan Benar',
            'is_unique' => 'Maaf, NIK sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbuser.email]', [
            'required' => 'Email Wajib Diisi',
            'valid_email' => 'Masukan Email yang Benar!',
            'is_unique' => 'Maaf, Email sudah terdaftar!'
        ]);

        $this->form_validation->set_rules('jeniskel', 'Jeniskel', 'required|trim|in_list[perempuan,Laki-Laki]', [
            'required' => 'Jenis Kelamin Harus Dipilih',
            'in_list' => 'Jenis Kelamin Harus Dipilih',
        ]);

        $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim', [
            'required' => 'Alamat Wajib Diisi'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Register';
            $this->load->view('template/auth_header', $data);
            $this->load->view('auth/register');
            $this->load->view('template/auth_footer');
        } else {
            $data = [
                'nama' => htmlspecialchars($this->input->post('nama', true)),
                'nik' => htmlspecialchars($this->input->post('nik', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'jeniskel' => htmlspecialchars($this->input->post('jeniskel', true)),
                'tgllahir' => $this->input->post('tgllahir', true),
                'status' => $this->input->post('status', true),
                'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            ];
            $this->db->insert('tbuser', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><a class="text-white">Selamat! Akun anda sudah berhasil dibuat, Silahkan Login</a></div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('nik');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><a class="text-white">Anda berhasil Logout</a></div>');
        redirect('auth');
    }
}
