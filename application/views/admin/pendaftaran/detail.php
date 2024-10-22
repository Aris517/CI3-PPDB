<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <h1 class="card-title fw-semibold">Pendaftaran</h1>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <p class="form-label fs-5">Pendaftaran Diri</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Paket</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->paket ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->kelas ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Klasifikasi Pembelajaran</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->klasifikasi ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->nama ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NISN</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->nisn ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">NIK</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->nik ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->tmp_lahir ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->tgl_lahir ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Agama</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->agama ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Sesuai KK</label>
                        <textarea type="text" class="form-control" disabled><?= $pendaftaran->alamat_skk ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat Domisili</label>
                        <textarea type="text" class="form-control" disabled><?= $pendaftaran->alamat_domisili ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kewarganegaraan</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->kewarganegaraan ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penerima KPS</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->penerima_kps ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No KPS</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->no_kps ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No HP</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->no_hp ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pekerjaan</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->pekerjaan ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apakah Calon Peserta Didik Berkebutuhan Khusus?</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->status_disabilitas ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apakah Calon Peserta Didik Bisa Membaca dan Menulis</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->status_bmm ?>" disabled>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <p class="form-label fs-5">Data Orang Tua</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Ibu</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->nama_ibu ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pekerjaan Ibu</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->pekerjaan_ibu ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir Ibu</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->tmp_lahir_ibu ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir Ibu</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->tgl_lahir_ibu ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Ayah</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->nama_ayah ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pekerjaan Ayah</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->pekerjaan_ayah ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tempat Lahir Ayah</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->tmp_lahir_ayah ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir Ayah</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->tgl_lahir_ayah ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea type="text" class="form-control" disabled><?= $pendaftaran->alamat ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Penghasilan</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->penghasilan ?>" disabled>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <p class="form-label fs-5">Data Periodik</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tinggi Badan</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->tinggi_badan ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Berat Badan</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->berat_badan ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jarak Rumah (KM)</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->jarak_rumah ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Waktu Tempuh (Menit)</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->waktu_tempuh ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah Saudara</label>
                        <input type="text" class="form-control" value="<?= $pendaftaran->jml_saudara ?>" disabled>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <p class="form-label mb-2 fs-5">Data Prestasi</p>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Prestasi</th>
                                <th>Tingkat Prestasi</th>
                                <th>Nama Prestasi</th>
                                <th>Tahun</th>
                                <th>Penyelenggara</th>
                                <th>Peringkat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($prestasi as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->jenis_prestasi ?></td>
                                    <td><?= $row->tingkat_prestasi ?></td>
                                    <td><?= $row->nama_prestasi ?></td>
                                    <td><?= $row->tahun ?></td>
                                    <td><?= $row->penyelenggara ?></td>
                                    <td><?= $row->peringkat ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <p class="form-label fs-5">Data Beasiswa</p>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jenis Beasiswa</th>
                                <th>Tahun Akhir</th>
                                <th>Status Terima</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($beasiswa as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->jenis_beasiswa ?></td>
                                    <td><?= $row->th_akhir ?></td>
                                    <td><?= $row->status_terima ?></td>
                                    <td><?= $row->ket ?></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <p class="form-label fs-5">Data Berkas</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Preview Berkas PDF</label>
                        <ol class="list-group list-group-numbered my-3">
                            <li class="list-group-item">KK</li>
                            <li class="list-group-item">Akta Kelahiran</li>
                            <li class="list-group-item">Ijazah Terakhir</li>
                            <li class="list-group-item">Rapor Bagi Peserta Didik Pindahan</li>
                            <li class="list-group-item">Foto</li>
                            <li class="list-group-item">KTP Orang Tua</li>
                            <li class="list-group-item">Surat Keterangan Bekerja Bagi Kelas Malam</li>
                            <li class="list-group-item">Berkebutuhan Khusus</li>
                            <li class="list-group-item">Bisa Membaca</li>
                            <li class="list-group-item">Bisa Menulis</li>
                        </ol>
                        <iframe class="rounded" src="<?= $pendaftaran->file ?>" width="100%" height="600"></iframe>
                    </div>
                </div>
            </div>
            <a href="<?= base_url('pendaftaran/manage') ?>" class="btn btn-warning form-control">Kembali</a>
        </div>
    </div>
</div>