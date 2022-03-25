<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_UserProfil extends CI_Model
{

    private $_tableUser = 'tbuser';
    private $_tableAdmin = 'tbadmin';
    private $_tableCatatanPerjalanan = 'tbcatatanperjalanan';

    public function getAllProfile()
    {
        $this->db->select('*');
        $this->db->from($this->_tableUser);
        $this->db->where('id', $this->session->userdata('id'));
        return $this->db->get()->result_array();
    }
}
