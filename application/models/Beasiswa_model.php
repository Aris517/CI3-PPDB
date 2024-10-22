<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beasiswa_model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert('data_beasiswa', $data);

        return $result;
    }

    public function destroy($data)
    {
        $result = $this->db->where('id_pendaftaran', $data)
            ->delete('data_beasiswa');

        return $result;
    }

    public function detail($id)
    {
        $result = $this->db->select('*')
            ->from('data_beasiswa')
            ->where('id_pendaftaran', $id)
            ->get()
            ->result();

        return $result;
    }
}
