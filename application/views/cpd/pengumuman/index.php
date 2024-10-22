<div class="container-fluid mt-4">
    <div class="card bg-info">
        <div class="card-body">
            <div class="mb-4 text-center">
                <h3>Pengumuman Hasil Seleksi</h3>
                <h3 class="mt-3">PPDB SKB KAB. TEGAL</h3>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <table class="table table-striped" id="dataTables" style="width: 100%;">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Paket</th>
                                <th class="text-center">Kelas</th>
                                <th class="text-center">NISN</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (date('Y-m-d') >= $jadwal->mulai && date('Y-m-d') <= $jadwal->selesai) : ?>
                                <?php $no = 1;
                                foreach ($pendaftaran as $row) : ?>
                                    <tr>
                                        <td class="text-center"><?= $no++ ?></td>
                                        <td class="text-center"><?= $row->paket ?></td>
                                        <td class="text-center"><?= $row->kelas ?></td>
                                        <td class="text-center"><?= $row->nisn ?></td>
                                        <td class="text-start"><?= $row->nama ?></td>
                                        <td class="text-start"><?= $row->status ?></td>
                                    </tr>
                                <?php endforeach ?>
                            <?php endif ?>
                        </tbody>
                    </table>
                    <div class="text-center mt-3">
                        <p class="text-center">Pengumuman mulai dari <?= $jadwal->mulai ?> sampai <?= $jadwal->selesai ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>