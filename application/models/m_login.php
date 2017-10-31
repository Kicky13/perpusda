<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {
    public function __construct()
    {
        parent:: __construct();
    }
    public function cek($username, $password)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->WHERE('username', $username);
        $this->db->WHERE('password', $password);
        $data = $this->db->get()->result_array();
        return $data[0];
    }
}
