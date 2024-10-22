<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal_model extends CI_Model
{
    public function update($data)
    {
        $result = $this->db->where('id_jadwal', 1)
            ->update('jadwal', $data);

        return $result;
    }

    public function get()
    {
        $data = $this->db->select('*')
            ->from('jadwal')
            ->where('id_jadwal', 1)
            ->get()
            ->row();

        return $data;
    }
}
