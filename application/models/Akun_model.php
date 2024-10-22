<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun_model extends CI_Model
{
    public function all()
    {
        $data = $this->db->select('*')
            ->from('akun')
            ->get()
            ->result();

        return $data;
    }

    public function petugas($role)
    {
        $data = $this->db->select('*')
            ->from('akun')
            ->join('petugas', 'petugas.id_akun = akun.id_akun')
            ->where('akun.role', $role)
            ->get()
            ->result();

        return $data;
    }

    public function detailPetugas($id)
    {
        $data = $this->db->select('*')
            ->from('akun')
            ->join('petugas', 'petugas.id_akun = akun.id_akun')
            ->where('akun.id_akun', $id)
            ->get()
            ->row();

        return $data;
    }

    public function detailPublik($id)
    {
        $data = $this->db->select('*')
            ->from('akun')
            ->where('id_akun', $id)
            ->get()
            ->row();

        return $data;
    }

    public function status($id, $data)
    {
        $result = $this->db->where('id_akun', $id)
            ->update('akun', $data);

        return $result;
    }

    public function cpd()
    {
        $data = $this->db->select('*')
            ->from('akun')
            ->where("role", 'cpd')
            ->get()
            ->result();

        return $data;
    }

    public function byEmail($kondisi)
    {
        $data = $this->db->select('*')
            ->from('akun')
            ->where('email', $kondisi)
            ->get()
            ->row();

        return $data;
    }

    public function byID($kondisi)
    {
        $data = $this->db->select('*')
            ->from('akun')
            ->where('id_akun', $kondisi)
            ->get()
            ->row();

        return $data;
    }

    public function insert($data)
    {
        $result = $this->db->insert('akun', $data);

        return $result;
    }

    public function update($email, $data)
    {
        $result = $this->db->where('email', $email)
            ->update('akun', $data);

        return $result;
    }
}
