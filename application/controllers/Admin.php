<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email', [
            'required' => 'Email Wajib Diisi',
            'valid_email' => 'Masukan Email yang Benar'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => 'Password Wajib Diisi',
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/AdminLogin');
            $this->load->view('template/auth_header');
            $this->load->view('template/auth_footer');
        } else {
            $this->Adminlogin();
        }
    }

    private function Adminlogin()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbadmin', ['email' => $email])->row_array();

        if ($user) {
            if ($user['active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'id' => $user['id'],
                        'name' => $user['name'],
                    ];
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Maaf Password Salah</div>');
                    redirect('admin');
                };
                $this->session->set_userdata($data);
                redirect('Admin_Dashboard');
            } else {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">Maaf akun anda belum aktif</div>');
                redirect('admin');
            };
        } else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert"> Maaf akun anda tidak terdaftar!</div>');
            redirect('admin');
        };
    }
    public function AdminRegister()
    {
        $this->form_validation->set_rules('nama', 'Name', 'required|trim', [
            'required' => 'Nama Wajib Diisi'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbuser.email]', [
            'required' => 'Email Wajib Diisi',
            'valid_email' => 'Masukan Email yang Benar!',
            'is_unique' => 'Maaf, Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'required' => 'Password Wajib Diisi',
            'min_length' => 'Password terlalu sedikit',
            'matches' => 'Password tidak sama'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Register';
            $this->load->view('template/auth_header', $data);
            $this->load->view('admin/AdminRegister');
            $this->load->view('template/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('nama', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'image' => 'default.jpg',
                'idlevel' => 1,
                'active' => 1,
                'datecreated' => 'time()'
            ];
            $this->db->insert('tbadmin', $data);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><a class="text-white ">
            Selamat! Akun anda sudah berhasil dibuat, Silakan Login</a></div>');
            redirect('admin');
        }
    }

    public function logoutAdmin()
    {
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('id');
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert"><a class="text-white">Anda berhasil Logout</a></div>');
        redirect('admin');
    }
}
