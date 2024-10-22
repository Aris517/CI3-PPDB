<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="d-flex mb-4">
                <h5 class="card-title fw-semibold">Kelola Pengumuman</h5>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <label class="form-label fs-6">Jadwal Pengumuman</label>
                        <div class="form-text">Sesuaikan tanggal untuk menampilkan pengumuman ppdb</div>
                    </div>
                    <form method="post">
                        <div class="row mb-3">
                            <div class="col">
                                <!-- <div class="form-floating"> -->
                                <label>Mulai</label>
                                <input type="date" class="form-control" name="mulai" value="<?= $jadwal->mulai ?>" required>
                                <!-- </div> -->
                            </div>
                            <div class="col">
                                <!-- <div class="form-floating"> -->
                                <label>Selesai</label>
                                <input type="date" class="form-control" name="selesai" value="<?= $jadwal->selesai ?>" required>
                                <!-- </div> -->
                            </div>
                            <div class="col">
                                <label></label>
                                <button type="submit" class="btn btn-primary form-control">Terapkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>