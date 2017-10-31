<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
    public function __construct()
    {
        parent:: __construct();
        $this->load->library('session', 'pdf');
        $this->load->model('m_agenda');
    }

    public function index()
    {
        if (isset($_SESSION['login'])){
            $data = $this->m_agenda->dataMasuk();
            $this->load->view('agendaMasuk', array('data' => $data));
        } else {
            $this->load->view('login');
        }
    }
    public function formBaru()
    {
        $this->load->view('masukForm');
    }
    public function editMasuk($id)
    {
        $data = $this->m_agenda->detailMasuk($id);
        $this->load->view('masukEdit', array('data' => $data));
    }
    public function addMasuk()
    {
            $noSurat = $_POST['noSurat'];
            $tglMasuk = $_POST['tglMasuk'];
            $tglTerima = $_POST['tglTerima'];
            $asal = $_POST['asalSurat'];
            $noAgenda = $_POST['noAgenda'];
            $perihal = $_POST['perihal'];
            if ($_POST['tembusan'] != ""){
                $terusan = $_POST['tembusan'];
            } else {
                $terusan = null;
            }
            if ($_POST['keterangan'] != ""){
                $keterangan = $_POST['keterangan'];
            } else {
                $keterangan = null;
            }
            $this->m_agenda->insertMasuk($noSurat, $tglMasuk, $asal, $tglTerima, $noAgenda, $perihal, $terusan, $keterangan);
            echo '<script>alert(swal("Good job!", "You clicked the button!", "success"));</script>';
            $this->index();
    }
    public function updateMasuk()
    {
        if ('update'){
            $id = $_POST['id'];
            $noSurat = $_POST['noSurat'];
            $tglMasuk = $_POST['tanggalMasuk'];
            $tglTerima = $_POST['tanggalTerima'];
            $asal = $_POST['asal'];
            $noAgenda = $_POST['noAgenda'];
            $perihal = $_POST['perihal'];
            if ($_POST['terusan'] != ""){
                $terusan = $_POST['terusan'];
            } else {
                $terusan = null;
            }
            if ($_POST['keterangan'] != ""){
                $keterangan = $_POST['keterangan'];
            } else {
                $keterangan = null;
            }
            $this->m_agenda->updateMasuk($id, $noSurat, $tglMasuk, $asal, $tglTerima, $noAgenda, $perihal, $terusan, $keterangan);
            $this->index();
        }
    }
    public function printPreview($id)
    {
        $data = $this->m_agenda->detailMasuk($id);
        $this->load->view('masukPDF', array('data' => $data));
    }
}
