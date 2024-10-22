<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Prestasi_model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert('data_prestasi', $data);

        return $result;
    }

    public function destroy($data)
    {
        $result = $this->db->where('id_pendaftaran', $data)
            ->delete('data_periodik');

        return $result;
    }

    public function detail($id)
    {
        $result = $this->db->select('*')
            ->from('data_prestasi')
            ->where('id_pendaftaran', $id)
            ->get()
            ->result();

        return $result;
    }
}
