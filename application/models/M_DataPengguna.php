<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_DataPengguna extends CI_Model
{
    private $_tableUser = 'tbuser';
    private $_tableAdmin = 'tbadmin';
    private $_tableCatatanPerjalanan = 'tbcatatanperjalanan';

    public function getAllPengguna()
    {
        $this->db->select('*');
        $this->db->from($this->_tableUser);
        return $this->db->get()->result_array();
    }
    public function getAllPerjalanan()
    {
        $this->db->select('*');
        $this->db->from($this->_tableCatatanPerjalanan);
        $this->db->join('tbuser', 'tbuser.id = tbcatatanperjalanan.id_user');
        return $this->db->get()->result_array();
    }
}
