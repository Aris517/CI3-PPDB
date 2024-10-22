<div class="container-fluid mt-4">
    <div class="card bg-info">
        <div class="card-body">
            <div class="mb-4 text-center">
                <h1 class="card-title fw-semibold">Pendaftaran</h1>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <p class="form-label fs-5">Form Pendaftaran Diri</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Paket</label>
                            <select name="paket" id="paket" class="form-select" required>
                                <option value="">Pilih Paket</option>
                                <option value="PAKET A">PAKET A</option>
                                <option value="PAKET B">PAKET B</option>
                                <option value="PAKET C">PAKET C</option>
                            </select>
                            <div id="paketHelp" class="form-text"></div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kelas</label>
                            <select name="kelas" id="kelas" class="form-select" required>
                                <option value="">Pilih Paket Dulu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Klasifikasi Pembelajaran</label>
                            <select name="klasifikasi" id="klasifikasi" class="form-select" required>
                                <option value="">Pilih Klasifikasi</option>
                                <option value="Pagi">Pagi</option>
                                <option value="Malam">Malam</option>
                                <option value="Ponpes">Ponpes</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NISN</label>
                            <input type="text" class="form-control" name="nisn" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">NIK</label>
                            <input type="text" class="form-control" name="nik" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tmp_lahir" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Agama</label>
                            <input type="text" class="form-control" name="agama" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat Sesuai KK</label>
                            <textarea type="text" class="form-control" name="alamat_skk" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat Domisili</label>
                            <textarea type="text" class="form-control" name="alamat_domisili" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kewarganegaraan</label>
                            <input type="text" class="form-control" name="kewarganegaraan" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penerima KPS</label>
                            <select name="penerima_kps" class="form-select" required>
                                <option value="">Pilih Status</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No KPS</label>
                            <input type="text" class="form-control" name="no_kps" value="">
                            <div class="form-text text-danger">Lewati jika tidak ada</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No HP</label>
                            <input type="text" class="form-control" name="no_hp" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pekerjaan</label>
                            <input type="text" class="form-control" name="pekerjaan" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apakah Calon Peserta Didik Berkebutuhan Khusus?</label>
                            <select name="status_disabilitas" class="form-select" required>
                                <option value="">Pilih Status</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Apakah Calon Peserta Didik Bisa Membaca dan Menulis</label>
                            <select name="status_bmm" class="form-select" required>
                                <option value="">Pilih Status</option>
                                <option value="Bisa Menulis">Bisa Menulis</option>
                                <option value="Bisa Membaca">Bisa Membaca</option>
                                <option value="Bisa Membaca dan Menulis">Bisa Membaca dan Menulis</option>
                                <option value="Belum Bisa Membaca atau Menulis">Belum Bisa Membaca atau Menulis</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <p class="form-label fs-5">Form Data Orang Tua</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Ibu</label>
                            <input type="text" class="form-control" name="nama_ibu" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pekerjaan Ibu</label>
                            <input type="text" class="form-control" name="pekerjaan_ibu" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir Ibu</label>
                            <input type="text" class="form-control" name="tmp_lahir_ibu" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir Ibu</label>
                            <input type="date" class="form-control" name="tgl_lahir_ibu" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Ayah</label>
                            <input type="text" class="form-control" name="nama_ayah" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Pekerjaan Ayah</label>
                            <input type="text" class="form-control" name="pekerjaan_ayah" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tempat Lahir Ayah</label>
                            <input type="text" class="form-control" name="tmp_lahir_ayah" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir Ayah</label>
                            <input type="date" class="form-control" name="tgl_lahir_ayah" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea type="text" class="form-control" name="alamat" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Penghasilan</label>
                            <select name="penghasilan" class="form-select" required>
                                <option value="">Pilih Penghasilan</option>
                                <option value="< Rp 500.000">
                                    < Rp 500.000</option>
                                <option value="Rp 500.000 - Rp 999.999">Rp 500.000 - Rp 999.999</option>
                                <option value="Rp 1.000.000 - Rp 1.999.999">Rp 1.000.000 - Rp 1.999.999</option>
                                <option value="Rp 2.000.000 - Rp 2.999.999">Rp 2.000.000 - Rp 2.999.999</option>
                                <option value="Rp 3.000.000 - Rp 3.999.999">Rp 3.000.000 - Rp 3.999.999</option>
                                <option value="> Rp 4.000.000">> Rp 4.000.000</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <p class="form-label fs-5">Form Data Periodik</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tinggi Badan</label>
                            <input type="number" class="form-control" name="tinggi_badan" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Berat Badan</label>
                            <input type="number" class="form-control" name="berat_badan" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jarak Rumah (KM)</label>
                            <input type="number" class="form-control" name="jarak_rumah" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Waktu Tempuh (Menit)</label>
                            <input type="number" class="form-control" name="waktu_tempuh" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jumlah Saudara</label>
                            <input type="number" class="form-control" name="jml_saudara" required>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <p class="form-label mb-2 fs-5">Form Data Prestasi</p>
                            <div class="form-text text-danger">Lewati jika tidak ada</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="inputTambahPrestasi">
                                    <button type="button" class="btn btn-outline-dark" id="tambahInputPrestasi">Tambah Inputan</button>
                                </div>
                            </div>
                            <div id="halPrestasi">
                                <input type="hidden" name="jmlPrestasi" id="jmlPrestasi" value="1">
                                <div class="row my-3">
                                    <div class="col">
                                        <hr>
                                    </div>
                                    <div class="col-1 text-center">
                                        <h5>1</h5>
                                    </div>
                                    <div class="col">
                                        <hr>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Jenis Prestasi</label>
                                    <input type="text" class="form-control" name="jenis_prestasi1">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tingkat Prestasi</label>
                                    <input type="text" class="form-control" name="tingkat_prestasi1">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nama Prestasi</label>
                                    <input type="text" class="form-control" name="nama_prestasi1">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Tahun</label>
                                    <input type="text" class="form-control" name="tahun1">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Penyelenggara</label>
                                    <input type="text" class="form-control" name="penyelenggara1">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Peringkat</label>
                                    <input type="text" class="form-control" name="peringkat1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <p class="form-label fs-5">Form Data Beasiswa</p>
                            <div class="form-text text-danger">Lewati jika tidak ada</div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <input type="number" class="form-control" id="inputTambahBeasiswa">
                                    <button type="button" class="btn btn-outline-dark" id="tambahInputBeasiswa">Tambah Inputan</button>
                                </div>
                            </div>
                        </div>
                        <div id="halBeasiswa">
                            <input type="hidden" name="jmlBeasiswa" id="jmlBeasiswa" value="1">
                            <div class="row my-3">
                                <div class="col">
                                    <hr>
                                </div>
                                <div class="col-1 text-center">
                                    <h5>1</h5>
                                </div>
                                <div class="col">
                                    <hr>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Beasiswa</label>
                                <input type="text" class="form-control" name="jenis_beasiswa1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tahun Akhir</label>
                                <input type="text" class="form-control" name="th_akhir1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status Terima</label>
                                <input type="text" class="form-control" name="status_terima1">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Keterangan</label>
                                <input type="text" class="form-control" name="ket1">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mb-3">
                            <p class="form-label fs-5">Form Data Berkas</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kirim link file PDF (<span class="text-danger">*menu bagikan/salin link wajib aktifkan akses public/siapa saja yang memiliki link</span>) yang sudah disimpan pada Google Drive ke sini!</label>
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
                            <div class="form-floating">
                                <textarea class="form-control" name="file" required></textarea>
                                <label for="floatingTextarea2">Link Google Drive</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning form-control">Daftar</button>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#paket').change(function() {
            var paket = $(this).val();
            var kelasOptions = '';

            if (paket === 'PAKET A') {
                kelasOptions = '<option value="">Pilih Kelas</option><option value="4">4</option><option value="5">5</option><option value="6">6</option>';
                $('#paketHelp').text('Paket untuk mendaftar Sekolah Dasar');
            } else if (paket === 'PAKET B') {
                kelasOptions = '<option value="">Pilih Kelas</option><option value="7">7</option><option value="8">8</option><option value="9">9</option>';
                $('#paketHelp').text('Paket untuk mendaftar Sekolah Menengah Pertama');
            } else if (paket === 'PAKET C') {
                kelasOptions = '<option value="">Pilih Kelas</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>';
                $('#paketHelp').text('Paket untuk mendaftar Sekolah Menengah Atas');
            } else {
                kelasOptions = '<option value="">Pilih Paket Dulu</option>'
                $('#paketHelp').text('');
            }

            $('#kelas').html(kelasOptions);
        });
    });

    $(document).ready(function() {
        let prestasiCount = 1;

        $('#tambahInputPrestasi').click(function() {
            const numToAdd = parseInt($('#inputTambahPrestasi').val());
            if (isNaN(numToAdd) || numToAdd <= 0) {
                alert('Masukkan jumlah input yang valid.');
                return;
            }

            for (let i = 0; i < numToAdd; i++) {
                prestasiCount++;
                $('#halPrestasi').append(`
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                        <div class="col-1 text-center">
                            <h5>${prestasiCount}</h5>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="prestasi-entry mb-3" data-index="${prestasiCount}">
                        <label class="form-label">Jenis Prestasi</label>
                        <input type="text" class="form-control" name="jenis_prestasi${prestasiCount}">
                    </div>
                    <div class="prestasi-entry mb-3" data-index="${prestasiCount}">
                        <label class="form-label">Tingkat Prestasi</label>
                        <input type="text" class="form-control" name="tingkat_prestasi${prestasiCount}">
                    </div>
                    <div class="prestasi-entry mb-3" data-index="${prestasiCount}">
                        <label class="form-label">Nama Prestasi</label>
                        <input type="text" class="form-control" name="nama_prestasi${prestasiCount}">
                    </div>
                    <div class="prestasi-entry mb-3" data-index="${prestasiCount}">
                        <label class="form-label">Tahun</label>
                        <input type="text" class="form-control" name="tahun${prestasiCount}">
                    </div>
                    <div class="prestasi-entry mb-3" data-index="${prestasiCount}">
                        <label class="form-label">Penyelenggara</label>
                        <input type="text" class="form-control" name="penyelenggara${prestasiCount}">
                    </div>
                    <div class="prestasi-entry mb-3" data-index="${prestasiCount}">
                        <label class="form-label">Peringkat</label>
                        <input type="text" class="form-control" name="peringkat${prestasiCount}">
                    </div>
                `);
            }

            $('#jmlPrestasi').val(prestasiCount);
        });
    });

    $(document).ready(function() {
        let beasiswaCount = 1;

        $('#tambahInputBeasiswa').click(function() {
            const numToAdd = parseInt($('#inputTambahBeasiswa').val());
            if (isNaN(numToAdd) || numToAdd <= 0) {
                alert('Masukkan jumlah input yang valid.');
                return;
            }

            for (let i = 0; i < numToAdd; i++) {
                beasiswaCount++;
                $('#halBeasiswa').append(`
                    <div class="row">
                        <div class="col">
                            <hr>
                        </div>
                        <div class="col-1 text-center">
                            <h5>${beasiswaCount}</h5>
                        </div>
                        <div class="col">
                            <hr>
                        </div>
                    </div>
                    <div class="beasiswa-entry mb-3" data-index="${beasiswaCount}">
                        <label class="form-label">Jenis Beasiswa</label>
                        <input type="text" class="form-control" name="jenis_beasiswa${beasiswaCount}">
                    </div>
                    <div class="beasiswa-entry mb-3" data-index="${beasiswaCount}">
                        <label class="form-label">Tahun Akhir</label>
                        <input type="text" class="form-control" name="th_akhir${beasiswaCount}">
                    </div>
                    <div class="beasiswa-entry mb-3" data-index="${beasiswaCount}">
                        <label class="form-label">Status Terima</label>
                        <input type="text" class="form-control" name="status_terima${beasiswaCount}">
                    </div>
                    <div class="beasiswa-entry mb-3" data-index="${beasiswaCount}">
                        <label class="form-label">Keterangan</label>
                        <textarea type="text" class="form-control" name="ket${beasiswaCount}"></textarea>
                    </div>
                `);
            }

            $('#jmlBeasiswa').val(beasiswaCount);
        });
    });
</script>