<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_CatatanPerjalanan extends CI_Model
{
    private $_tableUser = 'tbuser';
    private $_tableAdmin = 'tbadmin';
    private $_tableCatatanPerjalanan = 'tbcatatanperjalanan';

    public function getAllCatatan()
    {
        $this->db->select('*');
        $this->db->from($this->_tableCatatanPerjalanan);
        $this->db->where('id_user', $this->session->userdata('id'));
        return $this->db->get()->result_array();
    }
}
