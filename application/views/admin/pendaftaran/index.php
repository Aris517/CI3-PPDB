<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="d-flex mb-4">
                <h5 class="card-title fw-semibold">Kelola Pendaftaran</h5>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <p class="form-label fs-6">Data Pendaftaran</p>
                    </div>
                    <table class="table table-stiped" id="dataTables" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>nama</th>
                                <th>Detail</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($pendaftaran as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->nik ?></td>
                                    <td><?= $row->nama ?></td>
                                    <td><a href="<?= base_url('pendaftaran/detail/' . $row->id_pendaftaran) ?>" class="btn btn-sm btn-info">View</a></td>
                                    <td>
                                        <?php if ($row->status == 'Menunggu') : ?>
                                            <a href="<?= base_url('pendaftaran/status/' . $row->id_pendaftaran . '/Disetujui') ?>" class="btn btn-sm btn-success">ACC</a>
                                            <a href="<?= base_url('pendaftaran/status/' . $row->id_pendaftaran . '/Ditolak') ?>" class="btn btn-sm btn-danger">Tolak</a>
                                        <?php else : ?>
                                            <?= $row->status ?>
                                        <?php endif ?>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>