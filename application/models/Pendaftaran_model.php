<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pendaftaran_model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert('pendaftaran', $data);

        return $result;
    }

    public function destroy($data)
    {
        $result = $this->db->where('id_pendaftaran', $data)
            ->delete('pendaftaran');

        return $result;
    }

    public function byAkun($data)
    {
        $result = $this->db->select('*')
            ->from('pendaftaran')
            ->where('id_akun', $data)
            ->get()
            ->row();

        return $result;
    }

    public function get()
    {
        $result = $this->db->select('*')
            ->from('pendaftaran')
            ->join('data_diri', 'pendaftaran.id_pendaftaran = data_diri.id_pendaftaran')
            ->order_by('status', 'Menunggu')
            ->get()
            ->result();

        return $result;
    }

    public function short()
    {
        $result = $this->db->select('*')
            ->from('pendaftaran')
            ->join('data_diri', 'pendaftaran.id_pendaftaran = data_diri.id_pendaftaran')
            ->where('status !=', 'Menunggu')
            ->order_by('data_diri.nama', 'asc')
            ->order_by('pendaftaran.paket', 'asc')
            ->order_by('pendaftaran.kelas', 'asc')
            ->get()
            ->result();

        return $result;
    }

    public function detail($id)
    {
        $result = $this->db->select('*')
            ->from('pendaftaran')
            ->join('data_diri', 'pendaftaran.id_pendaftaran = data_diri.id_pendaftaran')
            ->join('data_ortu', 'pendaftaran.id_pendaftaran = data_ortu.id_pendaftaran')
            ->join('data_periodik', 'pendaftaran.id_pendaftaran = data_periodik.id_pendaftaran')
            ->join('berkas', 'pendaftaran.id_pendaftaran = berkas.id_pendaftaran')
            ->where('pendaftaran.id_pendaftaran', $id)
            ->get()
            ->row();

        return $result;
    }

    public function shortAKun($id)
    {
        $result = $this->db->select('*')
            ->from('pendaftaran')
            ->join('akun', 'pendaftaran.id_akun = akun.id_akun')
            ->where('pendaftaran.id_pendaftaran', $id)
            ->get()
            ->row();

        return $result;
    }

    public function status($id, $status)
    {
        $result = $this->db->where('id_pendaftaran', $id)
            ->update('pendaftaran', ['status' => $status]);

        return $result;
    }

    public function getPaket($paket)
    {
        $result = $this->db->select('*')
            ->from('pendaftaran')
            ->join('data_diri', 'pendaftaran.id_pendaftaran = data_diri.id_pendaftaran')
            ->join('data_ortu', 'pendaftaran.id_pendaftaran = data_ortu.id_pendaftaran')
            ->join('data_periodik', 'pendaftaran.id_pendaftaran = data_periodik.id_pendaftaran')
            ->where('pendaftaran.paket', $paket)
            ->get()
            ->result();

        return $result;
    }

    public function getPeriode($dari, $sampai)
    {
        $result = $this->db->select('*')
            ->from('pendaftaran')
            ->join('data_diri', 'pendaftaran.id_pendaftaran = data_diri.id_pendaftaran')
            ->join('data_ortu', 'pendaftaran.id_pendaftaran = data_ortu.id_pendaftaran')
            ->join('data_periodik', 'pendaftaran.id_pendaftaran = data_periodik.id_pendaftaran')
            ->where('pendaftaran.tgl_daftar >=', $dari)
            ->where('pendaftaran.tgl_daftar <=', $sampai)
            ->get()
            ->result();

        return $result;
    }
}
