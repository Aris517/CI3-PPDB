<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Petugas_model extends CI_Model
{
    public function insert($data)
    {
        $result = $this->db->insert('petugas', $data);

        return $result;
    }

    public function update($email, $data)
    {
        $result = $this->db->where('email', $email)
            ->update('akun', $data);

        return $result;
    }
}
