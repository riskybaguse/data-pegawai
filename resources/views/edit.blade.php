<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pegawai - CRUD Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta name="description" content="Halaman untuk mengedit data pegawai seperti nama, jabatan, umur, dan alamat. Pastikan data yang diubah sudah sesuai sebelum disimpan.">

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
    <h3 class="text-center fs-2 fw-bold text-uppercase">Edit Data Pegawai</h3>
    <p class="text-center text-muted fs-5">Silakan edit informasi pegawai sesuai kebutuhan.</p>
    <p class="text-center text-muted fs-5">Jangan lupa klik simpan setelah selesai.</p>
    <p class="text-center text-muted text-capitalize fs-5">
        Total pegawai saat ini: <strong>{{ $jumlah_pegawai }}</strong> pegawai
    </p>
    <div class="w-50 mx-auto mb-1 text-end">
        <a href="/pegawai" class="btn btn-outline-primary text-decoration-none"><i class="bi bi-backspace"></i> Kembali</a>
    </div>
    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post" class="w-50 mx-auto mt-2">
        {{ csrf_field() }}
        @method('PUT')
        <div class="mb-3">
            <label for="nama" class="form-label fw-semibold">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required value="{{ $p->pegawai_nama }}">
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label fw-semibold">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required value="{{ $p->pegawai_jabatan }}">

        </div>
        <div class="mb-3">
            <label for="umur" class="form-label fw-semibold">Umur</label>
            <input type="number" class="form-control" id="umur" name="umur" required value="{{ $p->pegawai_umur }}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label fw-semibold">Alamat</label>
            <textarea type="text" class="form-control" id="alamat" name="alamat" required>{{ $p->pegawai_alamat }}</textarea>
        </div>
        <div class="text-end">
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <button type="submit" class="btn btn-outline-success"><i class="bi bi-bookmark-check"></i> Update Data</button>
        </div>
    </form>
    @endforeach
    <footer class="text-center mt-5 text-muted py-3">
        <p>&copy; {{ date('Y') }} CRUD Laravel 12 Cuy. All rights reserved.</p>
    </footer>
</body>

</html>