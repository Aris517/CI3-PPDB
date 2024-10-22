<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="d-flex mb-4">
                <h5 class="card-title fw-semibold">Laporan Kategori</h5>
            </div>
            <div class="card">
                <div class="card-body p-4">
                    <div class="text-center mb-3">
                        <label class="form-label fs-6">Filter Data</label>
                        <div class="form-text">Sesuaikan jenis paket untuk dicetak</div>
                    </div>
                    <form target="_blank" method="post">
                        <div class="row mb-3">
                            <label class="form-label">Kategori Paket</label>
                            <div class="col">
                                <select name="paket" class="form-select" required>
                                    <option value="">Pilih paket</option>
                                    <option value="PAKET A">PAKET A</option>
                                    <option value="PAKET B">PAKET B</option>
                                    <option value="PAKET C">PAKET C</option>
                                </select>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary form-control">Cetak</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>