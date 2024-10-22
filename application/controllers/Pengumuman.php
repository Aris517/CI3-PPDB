<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengumuman extends CI_Controller
{
    public function index()
    {
        $data = [
            'pendaftaran' => $this->pendaftaran->short(),
            'jadwal' => $this->jadwal->get(),
        ];

        $this->load->view('cpd/layout/header');
        $this->load->view('cpd/pengumuman/index', $data);
        $this->load->view('cpd/layout/footer');
    }

    public function manage()
    {
        if (!$this->session->userdata('online') || $this->session->userdata('role')  !== 'admin') {
            return redirect('auth');
        }

        $post = $this->input->post(null, true);

        if (!empty($post)) {
            $data = [
                'mulai' => $post['mulai'],
                'selesai' => $post['selesai'],
            ];

            $cek = $this->jadwal->update($data);

            if ($cek) {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data berhasil diubah!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
            } else {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Data gagal diubah!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
            }
        }

        $data = [
            'jadwal' => $this->jadwal->get()
        ];

        $this->load->view('layout/header');
        $this->load->view('admin/pengumuman/index', $data);
        $this->load->view('layout/footer');
    }
}
