<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body class="bg-white">
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 fw-bold" href="#">
                CRUD Laravel 12 Cuy
            </a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <h3 class="text-center fs-2 fw-bold text-uppercase">Edit Data Pegawai</h3>
    <p class="text-center text-muted fs-5">~Yok cek dulu data pegawai yang udah masuk. Bisa tambah, edit, atau hapus cuy!~</p>
    <p class="text-center text-muted text-capitalize fs-5">
        Total pegawai saat ini: <strong>{{ $jumlah_pegawai }}</strong> pegawai
    </p>
    <br>
    <br>
    <div class="w-50 mx-auto mb-1 text-end">
        <a href="/pegawai" class="btn btn-primary text-white text-decoration-none">Kembali</a>
    </div>
    @foreach($pegawai as $p)
    <form action="/pegawai/update" method="post" class="w-50 mx-auto mt-2">
        {{ csrf_field() }}
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
                    <button type="submit" class="btn btn-warning text-white">Update Data</button>
                </div>
    </form>
    @endforeach
</body>

</html>