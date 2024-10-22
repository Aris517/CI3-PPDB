<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('online') || $this->session->userdata('role')  !== 'ks') {
            return redirect('auth');
        }
    }

    public function kategori()
    {

        $post = $this->input->post(null, true);

        if (empty($post)) {
            $this->load->view('layout/header');
            $this->load->view('ks/laporan/kategori');
            $this->load->view('layout/footer');
        } else {
            $data = [
                'opsi' => $post['paket'],
                'pendaftaran' => $this->pendaftaran->getPaket($post['paket']),
            ];

            $this->load->view('ks/laporan/cetak/kategori', $data);
        }
    }

    public function periode()
    {
        $post = $this->input->post(null, true);

        if (empty($post)) {
            $this->load->view('layout/header');
            $this->load->view('ks/laporan/periode');
            $this->load->view('layout/footer');
        } else {
            $data = [
                'dari' => $post['dari'],
                'sampai' => $post['sampai'],
                'pendaftaran' => $this->pendaftaran->getPeriode($post['dari'], $post['sampai']),
            ];

            $this->load->view('ks/laporan/cetak/periode', $data);
        }
    }
}
