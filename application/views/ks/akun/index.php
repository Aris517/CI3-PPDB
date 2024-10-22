<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="d-flex mb-4">
                <h5 class="card-title fw-semibold">Kelola Akun</h5>
                <a href="<?= base_url('akun/tambah') ?>" class="btn btn-sm btn-success ms-5">Tambah</a>
                <div class="ms-auto">
                    <b class="card-title fw-semibold">Filter :</b>
                    <button class="filter btn btn-sm btn-secondary active" data="all">Semua</button>
                    <button class="filter btn btn-sm btn-secondary" data="admin">Admin</button>
                    <button class="filter btn btn-sm btn-secondary" data="panitia">Panitia</button>
                    <button class="filter btn btn-sm btn-secondary" data="publik">Publik</button>
                </div>
            </div>

            <div class="card item" id="admin">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <p class="form-label fs-6">Akun Admin</p>
                    </div>
                    <table class="table table-stiped" id="akunAdmin" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>nama</th>
                                <th>Detail</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($admin as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->kode ?></td>
                                    <td><?= $row->username ?></td>
                                    <td><a href="<?= base_url('akun/detail/admin/' . $row->id_akun) ?>" class="btn btn-sm btn-info">View</a></td>
                                    <td><a href="<?= base_url('akun/status/' . $row->id_akun) ?>" class="btn btn-sm <?= $row->status == 'aktif' ? 'btn-warning' : 'btn-success' ?>"><?= $row->status ?></a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card item" id="panitia">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <p class="form-label fs-6">Akun Panitia</p>
                    </div>
                    <table class="table table-stiped" id="akunPanitia" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>nama</th>
                                <th>Detail</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($panitia as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->kode ?></td>
                                    <td><?= $row->username ?></td>
                                    <td><a href="<?= base_url('akun/detail/panitia/' . $row->id_akun) ?>" class="btn btn-sm btn-info">View</a></td>
                                    <td><a href="<?= base_url('akun/status/' . $row->id_akun) ?>" class="btn btn-sm <?= $row->status == 'aktif' ? 'btn-warning' : 'btn-success' ?>"><?= $row->status ?></a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card item" id="publik">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <p class="form-label fs-6">Akun Publik</p>
                    </div>
                    <table class="table table-stiped" id="akunPublik" style="width: 100%;">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Nama</th>
                                <th>Detail</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1;
                            foreach ($publik as $row) : ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $row->email ?></td>
                                    <td><?= $row->username ?></td>
                                    <td><a href="<?= base_url('akun/detail/publik/' . $row->id_akun) ?>" class="btn btn-sm btn-info">View</a></td>
                                    <td><a href="<?= base_url('akun/status/' . $row->id_akun) ?>" class="btn btn-sm <?= $row->status == 'aktif' ? 'btn-warning' : 'btn-success' ?>"><?= $row->status ?></a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>