<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Membuat CRUD Pada Laravel</title>
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
    <h3 class="text-center fs-2 fw-bold text-uppercase">Data Pegawai</h3>
    <p class="text-center text-muted fs-5">~Yok cek dulu data pegawai yang udah masuk. Bisa tambah, edit, atau hapus cuy!~</p>
    <p class="text-center text-muted text-capitalize fs-5">
        Total pegawai saat ini: <strong>{{ count($pegawai) }}</strong> pegawai
    </p>

    <br>
    <br>
    <div class="w-75 mx-auto mb-3 text-end">
        <a href="/pegawai/tambah" class="btn btn-primary text-white text-decoration-none"> + Tambah Pegawai Baru</a>
    </div>
    <div class="table-responsive w-80 mx-auto">
        <table class="table table-bordered table-striped table-hover text-center w-75 mx-auto">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
            @foreach($pegawai as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan}}</td>
                <td>{{ $p->pegawai_umur}}</td>
                <td>{{ $p->pegawai_alamat}}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning text-white text-decoration-none m-1">Edit</a>
    
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger text-white text-decoration-none m-1">Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <footer class="text-center mt-5 text-muted py-3">
        <p>&copy; {{ date('Y') }} CRUD Laravel 12 Cuy. All rights reserved.</p>
    </footer>
</body>

</html>