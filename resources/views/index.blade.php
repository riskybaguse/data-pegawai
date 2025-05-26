<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Halaman utama yang menampilkan daftar lengkap data pegawai. Kamu bisa melihat, mengedit, atau menghapus data pegawai melalui halaman ini.">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    

    <title>Tutorial Membuat CRUD Pada Laravel</title>

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
    <h3 class="text-center fs-3 fw-bold text-uppercase">View Data Pegawai</h3>
    <p class="text-center text-muted fs-5">Cek data pegawai yang udah masuk di bawah ini.</p>
    <p class="text-center text-muted fs-5"> Mau nambah, edit, atau hapus? Tinggal klik tombolnya!</p>
    <p class="text-center text-muted text-capitalize fs-5">
        Total pegawai saat ini: <strong>{{ $jumlah_pegawai}}</strong> pegawai
    </p>
    @if(request('search'))
    <p class="text-center text-muted alert alert-info">Hasil pencarian untuk <strong>"{{ request('search') }}"</strong>: {{ count($pegawai) }} data ditemukan!</p>

    <div class="w-75 mx-auto mb-3 d-flex justify-content-between">
        <a href="/pegawai" class="btn btn-outline-primary text-decoration-none"><i class="bi bi-backspace"></i> Kembali</a>
    </div>
    @endif

    <div class="w-75 mx-auto mb-3 d-flex justify-content-between">
        <a href="/pegawai/tambah" class="btn btn-outline-primary text-decoration-none">
            <i class="bi bi-plus-circle"></i> Tambah Pegawai Baru
        </a>
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
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning text-decoration-none"> <i class="bi bi-pencil"></i> Edit</a>

                    <form action="/pegawai/hapus/{{ $p->pegawai_id }}" method="POST" class="form-hapus d-inline">
                        @csrf
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
<script>
    document.querySelectorAll('.form-hapus').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                title: 'Yakin mau hapus data ini?',
                text: "Data yang sudah dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            });
        });
    });
</script>

</html>