<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="d-flex mb-4">
                <h5 class="card-title fw-semibold">Detail Data Akun</h5>
                <a href="<?= base_url('akun/manage') ?>" class="btn btn-sm btn-warning ms-4">Kembali</a>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <label class="form-label fs-6">Data Akun</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" class="form-control" value="<?= $akun->username ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" class="form-control" value="<?= $akun->email ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Role</label>
                        <input type="text" class="form-control" value="<?= $akun->role == 'cpd' ? 'Calon Peserta Didik' : $akun->role ?>" disabled>
                    </div>
                    <?php if ($akun->role !== 'cpd') : ?>
                        <div class="mb-3">
                            <label class="form-label">Kode Pengenal</label>
                            <input type="text" class="form-control" value="<?= $akun->kode ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <textarea type="text" class="form-control" disabled><?= $akun->alamat ?></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No Hp</label>
                            <input type="text" class="form-control" value="<?= $akun->no_hp ?>" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Periode</label>
                            <input type="text" class="form-control" value="<?= $akun->periode ?>" disabled>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>