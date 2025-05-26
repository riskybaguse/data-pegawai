<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Halaman tambah data pegawai pada sistem CRUD Laravel. Isi form ini untuk menambahkan data pegawai baru secara lengkap dan terstruktur.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="shortcut icon" href="assets/favicon.jpg" type="image/x-icon">
    <title>Tambah Pegawai</title>
    
</head>

<body class="bg-white">
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <h2><strong>CRUD Laravel 12 Cuy</strong></h2>
            <form class="navbar-form navbar-left animate__animated animate__fadeInLeft" role="search" method="GET" action="/pegawai/" role="search">
                <div class="form-group mt-10 d-flex align-items-center">
                    <input type="text" class="form-control border-end-0 border rounded-pill me-2" name="search" placeholder="Search Name..." value="{{ request('search') }}" aria-label="Search" autocomplete="off">
                    <button type="submit" name="submit" class="btn btn-outline-secondary rounded-pill" aria-label="search"><i class="bi bi-search" aria-hidden="true"></i></button>
                </div>
            </form>
        </div>
    </nav>
    <h3 class="text-center fs-2 fw-bold text-uppercase">Tambah Data Pegawai</h3>
    <p class="text-center text-muted fs-5">Lengkapi form berikut buat nambahin data pegawai baru</p>
    <p class="text-center text-muted text-capitalize fs-5">
        Total pegawai saat ini: <strong>{{ $jumlah_pegawai }}</strong> pegawai
    </p>
    <div class="w-50 mx-auto mb-1 text-end">
        <a href="/pegawai" class="btn btn-outline-primary text-decoration-none"><i class="bi bi-backspace"></i> Kembali</a>
    </div>
    <form action="/pegawai/store" method="post" class="w-50 mx-auto mt-2">
        {{ csrf_field() }}

        <div class="mb-3">
            <label for="nama" class="form-label fw-semibold">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label fw-semibold">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required>
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label fw-semibold">Umur</label>
            <input type="number" class="form-control" id="umur" name="umur" required>
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label fw-semibold">Alamat</label>
            <textarea type="text" class="form-control" id="alamat" name="alamat" required></textarea>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-outline-success "><i class="bi bi-floppy"></i> Simpan Data</button>
        </div>
    </form>
    <footer class="text-center mt-5 text-muted py-3">
        <p>&copy; {{ date('Y') }} CRUD Laravel 12 Cuy. All rights reserved.</p>
    </footer>
</body>

</html>