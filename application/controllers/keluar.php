<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keluar extends CI_Controller {

    public function __construct()
    {
        parent:: __construct();
        $this->load->model('m_agenda');
        $this->load->library('session');
    }

    public function index()
    {
        if (isset($_SESSION['login'])){
            $data = $this->m_agenda->dataKeluar();
            $this->load->view('agendaKeluar', array('data' => $data));
        } else {
            $this->load->view('login');
        }
    }
    public function formBaru()
    {
        $this->load->view('keluarForm');
    }
    public function editKeluar($id)
    {
        $data = $this->m_agenda->detailKeluar($id);
        $this->load->view('keluarEdit', array('data' => $data));
    }
    public function addKeluar()
    {
        if ('submit'){
            $noSurat = $_POST['noSurat'];
            $tglKeluar = $_POST['tglSurat'];
            $tujuan = $_POST['tujuan'];
            $perihal = $_POST['perihal'];
            if ($_POST['keterangan'] != ""){
                $keterangan = $_POST['keterangan'];
            } else {
                $keterangan = null;
            }
            $this->m_agenda->insertKeluar($noSurat, $tglKeluar, $tujuan, $perihal, $keterangan);
            $this->index();
        }
    }
    public function updateKeluar($id)
    {
        if ('update'){
            $noSurat = $_POST['noSurat'];
            $tglKeluar = $_POST['tglSurat'];
            $tujuan = $_POST['tujuan'];
            $perihal = $_POST['perihal'];
            if ($_POST['keterangan'] != ""){
                $keterangan = $_POST['keterangan'];
            } else {
                $keterangan = null;
            }
            $this->m_agenda->updateKeluar($id, $noSurat, $tglKeluar, $tujuan, $perihal, $keterangan);
            $this->index();
        }
    }
    public function printKeluar()
    {
        if ('print'){
            $bulan = $_POST['bulan'];
            $tahun = $_POST['tahun'];
            $data = $this->m_agenda->printKeluar($bulan, $tahun);
            $this->load->view('keluarPDF', array('data' => $data));
        }
    }
}
