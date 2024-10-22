<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akun extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper('token');

        if (!$this->session->userdata('online') || $this->session->userdata('role')  !== 'ks') {
            return redirect('auth');
        }
    }

    public function manage()
    {
        $data = [
            'admin' => $this->akun->petugas('admin'),
            'panitia' => $this->akun->petugas('panitia'),
            'publik' => $this->akun->cpd('cpd'),
        ];

        $this->load->view('layout/header');
        $this->load->view('ks/akun/index', $data);
        $this->load->view('layout/footer');
    }

    public function detail($role, $id)
    {
        if ($role != 'publik') {
            $akun = $this->akun->detailPetugas($id);
        } else {
            $akun = $this->akun->detailPublik($id);
        }

        $data = [
            'akun' => $akun
        ];

        $this->load->view('layout/header');
        $this->load->view('ks/akun/detail', $data);
        $this->load->view('layout/footer');
    }

    public function status($id)
    {
        $akun = $this->akun->byID($id);
        if ($akun->status == 'aktif') {
            $status = 'nonaktif';
        } else {
            $status = 'aktif';
        }

        $data = [
            'status' => $status,
        ];

        $result = $this->akun->status($id, $data);

        if ($result) {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                    Status berhasil diubah
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                Status gagal diubah
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
        }
        return redirect('akun/manage');
    }

    public function tambah()
    {
        $post = $this->input->post(null, true);

        if (empty($post)) {
            $this->load->view('layout/header');
            $this->load->view('ks/akun/tambah');
            $this->load->view('layout/footer');
        } else {
            $this->form_validation->set_rules('email', 'Email', 'is_unique[akun.email]');
            $this->form_validation->set_rules('kode', 'Kode', 'is_unique[petugas.kode]');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        Email telah digunakan!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                return redirect('akun/tambah');
            } else {
                if ($post['password'] === $post['k_password']) {
                    $data = [
                        'username' => $post['username'],
                        'email' => $post['email'],
                        'password' => password_hash($post['password'], PASSWORD_DEFAULT),
                        'token' => generate_sha256_hash($post['email'] . $post['username'] . $post['role'] . ' verify'),
                        'status' => 'aktif',
                        'verify' => true,
                        'role' => $post['role'],
                    ];

                    $result = $this->akun->insert($data);

                    if ($result) {
                        $id_akun = $this->db->insert_id();

                        $data = [
                            'id_akun' => $id_akun,
                            'kode' => $post['kode'],
                            'alamat' => $post['alamat'],
                            'no_hp' => $post['no_hp'],
                            'periode' => $post['periode'],
                        ];

                        $result = $this->petugas->insert($data);

                        if ($result) {
                            $this->session->set_flashdata(
                                'pesan',
                                '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    Data berhasil disimpan
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>'
                            );
                            return redirect('akun/manage');
                        } else {
                            $this->session->set_flashdata(
                                'pesan',
                                '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Data akun gagal disimpan!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>'
                            );
                            return redirect('akun/tambah');
                        }
                    } else {
                        $this->session->set_flashdata(
                            'pesan',
                            '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                Data akun gagal disimpan!
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>'
                        );
                        return redirect('akun/tambah');
                    }
                } else {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            Konfirmasi password harus sinkron dengan password!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>'
                    );
                    return redirect('akun/tambah');
                }
            }
        }
    }
}
