<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diri_model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert('data_diri', $data);

        return $result;
    }

    public function destroy($data)
    {
        $result = $this->db->where('id_pendaftaran', $data)
            ->delete('data_diri');

        return $result;
    }
}
