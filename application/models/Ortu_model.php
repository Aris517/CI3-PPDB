<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ortu_model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert('data_ortu', $data);

        return $result;
    }

    public function destroy($data)
    {
        $result = $this->db->where('id_pendaftaran', $data)
            ->delete('data_ortu');

        return $result;
    }
}
