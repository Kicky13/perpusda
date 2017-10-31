<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agenda extends CI_Model {

    public function __construct()
    {
        parent:: __construct();
    }
    public function dataMasuk()
    {
        $data = $this->db->query('SELECT *, DATE_FORMAT(tanggalMasuk, "%d/%m/%Y") AS tglMasuk, DATE_FORMAT(tanggalTerima, "%d/%m/%Y") AS tglTerima FROM agendamasuk');
        return $data->result_array();
    }
    public function dataKeluar()
    {
        $data = $this->db->query('SELECT *, DATE_FORMAT(tanggalSurat, "%d/%m/%Y") AS tglSurat FROM agendakeluar');
        return $data->result_array();
    }
    public function detailMasuk($id)
    {
        $data = $this->db->query('SELECT *, DATE_FORMAT(tanggalMasuk, "%d/%m/%Y") AS tglMasuk, DATE_FORMAT(tanggalTerima, "%d/%m/%Y") AS tglTerima FROM agendamasuk WHERE idMasuk = '.$id)->result_array();
        return $data[0];
    }
    public function detailkeluar($id)
    {
        $this->db->select('*');
        $this->db->from('agendakeluar');
        $this->db->WHERE('idKeluar', $id);
        $data = $this->db->get();
        return $data->result();
    }
    public function insertMasuk($noSurat, $tglMasuk, $asal, $tglTerima, $noAgenda, $perihal, $terusan, $keterangan)
    {
        $query = array(
            'idMasuk' => 'null',
            'noSurat' => $noSurat,
            'tanggalMasuk' => $tglMasuk,
            'asalSurat' => $asal,
            'tanggalTerima' => $tglTerima,
            'noAgenda' => $noAgenda,
            'perihal' => $perihal,
            'tembusan' => $terusan,
            'keterangan' => $keterangan
        );
        $this->db->insert('agendamasuk', $query);
    }
    public function insertKeluar($noSurat, $tglSurat, $tujuan, $perihal, $keterangan)
    {
        $query = array(
            'idKeluar' => 'null',
            'noSurat' => $noSurat,
            'tanggalSurat' => $tglSurat,
            'tujuan' => $tujuan,
            'perihal' => $perihal,
            'keterangan' => $keterangan
        );
        $this->db->insert('agendakeluar', $query);
    }
    public function updateMasuk($id, $noSurat, $tglMasuk, $asal, $tglTerima, $noAgenda, $perihal, $terusan, $keterangan)
    {
        $this->db->set('noSurat', $noSurat);
        $this->db->set('tanggalSurat', $tglMasuk);
        $this->db->set('asalSurat', $asal);
        $this->db->set('tanggalTerima', $tglTerima);
        $this->db->set('noAgenda', $noAgenda);
        $this->db->set('perihal', $perihal);
        $this->db->set('diteruskan', $terusan);
        $this->db->set('keterangan', $keterangan);
        $this->db->where('idMasuk', $id);
        $this->db->update('agendamasuk');
    }
    public function updateKeluar($id, $noSurat, $tglSurat, $tujuan, $perihal, $keterangan)
    {
        $this->db->set('noSurat', $noSurat);
        $this->db->set('tanggalSurat', $tglSurat);
        $this->db->set('tujuan', $tujuan);
        $this->db->set('perihal', $perihal);
        $this->db->set('keterangan', $keterangan);
        $this->db->where('idKeluar', $id);
        $this->db->update('agendakeluar');
    }
    public function printKeluar($bulan, $tahun)
    {
        $data = $this->db->query('SELECT *, DATE_FORMAT(tanggalSurat, "%d/%m/%Y") AS tglSurat FROM agendakeluar WHERE MONTH(tanggalSurat) = '.$bulan.' AND YEAR(tanggalSurat) = '.$tahun)->result_array();
        return $data;
    }
}
