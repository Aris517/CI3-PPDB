<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berkas_model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert('berkas', $data);

        return $result;
    }

    public function short($data)
    {
        $result = $this->db->select('*')
            ->from('berkas')
            ->where('id_pendaftaran', $data)
            ->get()
            ->row();

        return $result;
    }

    public function destroy($data)
    {
        $result = $this->db->where('id_pendaftaran', $data)
            ->delete('berkas');

        return $result;
    }
}
