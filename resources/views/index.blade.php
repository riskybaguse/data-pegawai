<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Membuat CRUD Pada Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <meta name="description" content="Halaman utama yang menampilkan daftar lengkap data pegawai. Kamu bisa melihat, mengedit, atau menghapus data pegawai melalui halaman ini.">

</head>

<body class="bg-white">
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 fw-bold" href="#">
                CRUD Laravel 12 Cuy
            </a>
            <form class="d-flex" role="search">
                <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search" />
                <button class="btn btn-outline-primary align-items-center d-flex rounded-pill" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </nav>
    <h3 class="text-center fs-2 fw-bold text-uppercase">View Data Pegawai</h3>
    <p class="text-center text-muted fs-5">Cek data pegawai yang udah masuk di bawah ini.</p>
    <p class="text-center text-muted fs-5"> Mau nambah, edit, atau hapus? Tinggal klik tombolnya!</p>
    <p class="text-center text-muted text-capitalize fs-5">
        Total pegawai saat ini: <strong>{{ count($pegawai) }}</strong> pegawai
    </p>
    <div class="w-75 mx-auto mb-3 text-end">
        <a href="/pegawai/tambah" class="btn btn-outline-primary  text-decoration-none"><i class="bi bi-plus-circle"></i> Tambah Pegawai Baru</a>
    </div>
    <div class="table-responsive w-80 mx-auto">
        <table class="table table-bordered table-striped table-hover text-center align-middle w-75 mx-auto">
            <tr class="table-primary">
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
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning text-decoration-none m-1"> <i class="bi bi-pen"></i> Edit</a>

                    <form action="/pegawai/hapus/{{ $p->pegawai_id }}" method="POST" style="display: inline;" onsubmit="return confirm('Yakin mau hapus karyawan?')">
                        {{ csrf_field() }}
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-decoration-none m-1"> <i class="bi bi-trash"></i> Hapus</button>
                    </form>
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