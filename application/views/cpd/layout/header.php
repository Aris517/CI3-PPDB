<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB SKB KAB. TEGAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.css">
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.dataTables.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-info">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img class="rounded" src="<?= base_url('assets/img/logo/kuliIT.jpg') ?>" alt="Logo" width="50" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fs-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= base_url('') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('pendaftaran') ?>">Pendaftaran</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('pengumuman') ?>">Pengumuman</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('informasi') ?>">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <?php if ($this->session->userdata('online')) : ?>
                            <a class="nav-link text-danger" href="<?= base_url('auth') ?>">Logout</a>
                        <?php else : ?>
                            <a class="nav-link text-warning" href="<?= base_url('auth') ?>">Login</a>
                        <?php endif ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid">
        <?= $this->session->flashdata('pesan') ?>
    </div>