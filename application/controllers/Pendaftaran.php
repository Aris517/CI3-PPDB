<?php
defined('BASEPATH') or exit('No direct script access allowed');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Pendaftaran extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if (!$this->session->userdata('online')) {
            return redirect('auth');
        }
    }

    public function index()
    {
        if ($this->session->userdata('role') !== 'cpd') {
            return redirect('auth');
        }

        if (!empty($this->pendaftaran->byAkun($this->session->userdata('akun')))) {
            $this->__done();
        } else {
            $post = $this->input->post(null, true);

            if (empty($post)) {
                $this->load->view('cpd/layout/header');
                $this->load->view('cpd/pendaftaran/index');
                $this->load->view('cpd/layout/footer');
            } else {
                $pendaftaran = [
                    'id_akun' => $this->session->userdata('akun'),
                    'paket' => $post['paket'],
                    'kelas' => $post['kelas'],
                    'klasifikasi' => $post['klasifikasi'],
                ];

                $cek1 = $this->pendaftaran->insert($pendaftaran);

                $id = $this->db->insert_id();

                if (!empty($post['file'])) {
                    $parts = explode('/', $post['file']);
                    $base_link = "https://drive.google.com/file/d/" . $parts[5] . "/preview";
                } else {
                    $this->pendaftaran->destroy($id);

                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Link tidak ada!
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>'
                    );
                    return redirect('pendaftaran');
                }


                $berkas = [
                    'id_pendaftaran' => $id,
                    'file' => $base_link,
                ];

                $cek5 = $this->berkas->insert($berkas);

                $diri = [
                    'id_pendaftaran' => $id,
                    'nama' => $post['nama'],
                    'nisn' => $post['nisn'],
                    'nik' => $post['nik'],
                    'tmp_lahir' => $post['tmp_lahir'],
                    'tgl_lahir' => $post['tgl_lahir'],
                    'agama' => $post['agama'],
                    'alamat_skk' => $post['alamat_skk'],
                    'alamat_domisili' => $post['alamat_domisili'],
                    'kewarganegaraan' => $post['kewarganegaraan'],
                    'penerima_kps' => $post['penerima_kps'],
                    'no_kps' => $post['no_kps'],
                    'no_hp' => $post['no_hp'],
                    'pekerjaan' => $post['pekerjaan'],
                    'status_disabilitas' => $post['status_disabilitas'],
                    'status_bmm' => $post['status_bmm'],
                ];

                $cek2 = $this->diri->insert($diri);

                $ortu = [
                    'id_pendaftaran' => $id,
                    'nama_ibu' => $post['nama_ibu'],
                    'pekerjaan_ibu' => $post['pekerjaan_ibu'],
                    'tmp_lahir_ibu' => $post['tmp_lahir_ibu'],
                    'tgl_lahir_ibu' => $post['tgl_lahir_ibu'],
                    'nama_ayah' => $post['nama_ayah'],
                    'pekerjaan_ayah' => $post['pekerjaan_ayah'],
                    'tmp_lahir_ayah' => $post['tmp_lahir_ayah'],
                    'tgl_lahir_ayah' => $post['tgl_lahir_ayah'],
                    'alamat' => $post['alamat'],
                    'penghasilan' => $post['penghasilan'],
                ];

                $cek3 = $this->ortu->insert($ortu);

                $periodik = [
                    'id_pendaftaran' => $id,
                    'tinggi_badan' => $post['tinggi_badan'],
                    'berat_badan' => $post['berat_badan'],
                    'jarak_rumah' => $post['jarak_rumah'],
                    'waktu_tempuh' => $post['waktu_tempuh'],
                    'jml_saudara' => $post['jml_saudara'],
                ];

                $cek4 = $this->periodik->insert($periodik);

                for ($i = 1; $i <= $this->input->post('jmlPrestasi'); $i++) {
                    $prestasi = [
                        'id_pendaftaran' => $id,
                        'jenis_prestasi' => $post["jenis_prestasi$i"],
                        'tingkat_prestasi' => $post["tingkat_prestasi$i"],
                        'nama_prestasi' => $post["nama_prestasi$i"],
                        'tahun' => $post["tahun$i"],
                        'penyelenggara' => $post["penyelenggara$i"],
                        'peringkat' => $post["peringkat$i"],
                    ];

                    $cek6 = $this->prestasi->insert($prestasi);
                }

                for ($i = 1; $i <= $this->input->post('jmlBeasiswa'); $i++) {
                    $beasiswa = [
                        'id_pendaftaran' => $id,
                        'jenis_beasiswa' => $post["jenis_beasiswa$i"],
                        'th_akhir' => $post["th_akhir$i"],
                        'status_terima' => $post["status_terima$i"],
                        'ket' => $post["ket$i"],
                    ];

                    $cek7 = $this->beasiswa->insert($beasiswa);
                }

                if ($cek1 && $cek2 && $cek3 && $cek4 && $cek5 && $cek6 && $cek7) {
                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Data berhasil disimpan
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                    );
                    return redirect('pendaftaran');
                } else {
                    $this->pendaftaran->destroy($id);
                    $this->diri->destroy($id);
                    $this->ortu->destroy($id);
                    $this->periodik->destroy($id);
                    $this->prestasi->destroy($id);
                    $this->beasiswa->destroy($id);
                    $this->berkas->destroy($id);

                    $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Data gagal disimpan
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>'
                    );
                    return redirect('pendaftaran');
                }
            }
        }
    }

    private function __done()
    {
        $this->load->view('cpd/layout/header');
        $this->load->view('cpd/pendaftaran/done');
        $this->load->view('cpd/layout/footer');
    }

    public function manage()
    {
        if ($this->session->userdata('role') !== 'admin' || $this->session->userdata('role') !== 'panitia') {
            return redirect('auth');
        }

        $data = [
            'pendaftaran' => $this->pendaftaran->get()
        ];

        $this->load->view('layout/header');
        $this->load->view('admin/pendaftaran/index', $data);
        $this->load->view('layout/footer');
    }

    public function detail($id)
    {
        if ($this->session->userdata('role') !== 'admin' || $this->session->userdata('role') !== 'panitia') {
            return redirect('auth');
        }

        $data = [
            'pendaftaran' => $this->pendaftaran->detail($id),
            'prestasi' => $this->prestasi->detail($id),
            'beasiswa' => $this->beasiswa->detail($id),
        ];

        $this->load->view('layout/header');
        $this->load->view('admin/pendaftaran/detail', $data);
        $this->load->view('layout/footer');
    }

    public function status($id, $status)
    {
        if ($this->session->userdata('role') !== 'admin' || $this->session->userdata('role') !== 'panitia') {
            return redirect('auth');
        }

        $result = $this->pendaftaran->status($id, $status);

        if ($result) {
            $akun = $this->pendaftaran->shortAKun($id);

            $to                 = $akun->email;
            $subject            = "Informasi Pendaftaran SKB KAB. TEGAL";

            $message = '<h1 style="margin-bottom:30px; text-align:center;">Informasi</h1>';

            if ($status == 'Diterima') {
                $message .= '<p style="margin-bottom:30px; text-align:center;">Selamat anda telah lolos seleksi administrasi</p>';
            } else {
                $message .= '<p style="margin-bottom:30px; text-align:center;">Mohon maaf anda tidak lolos seleksi administrasi</p>';
            }

            $message .= '<p style="margin-top:80px; text-align:center;">PPDB</p>';


            $mail = new PHPMailer(true);

            try {
                $mail->SMTPDebug = SMTP::DEBUG_OFF;
                $mail->isSMTP();
                $mail->Host       = 'smtp.googlemail.com';
                $mail->SMTPAuth   = true;
                $mail->Host       = 'smtp.googlemail.com';
                $mail->SMTPAuth   = true;
                $mail->Username   = ''; // ubah dengan alamat email Anda
                $mail->Password   = ''; // ubah dengan app password yang telah diuat
                $mail->SMTPSecure = 'ssl';
                $mail->Port       = 465;

                $mail->setFrom('', ''); // ubah dengan alamat email dan nama Anda
                $mail->addAddress($to);
                $mail->addReplyTo('', ''); // ubah dengan alamat email dan nama Anda

                // Isi Email
                $mail->isHTML(true);
                $mail->Subject = $subject;
                $mail->Body    = $message;

                $mail->send();

                $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Status berhasil diubah
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                $this->session->set_flashdata(
                    'email',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                        Berhasil kirim ke email pengguna
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                return redirect('pendaftaran/manage');
            } catch (Exception $e) {
                $this->session->set_flashdata(
                    'email',
                    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                        ' . $mail->ErrorInfo . '
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>'
                );
                return redirect('pendaftaran/manage');
            }
        } else {
            $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    Status gagal diubah
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>'
            );
            return redirect('pendaftaran/manage');
        }
    }
}
