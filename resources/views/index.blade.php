<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Membuat CRUD Pada Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="description" content="Halaman utama yang menampilkan daftar lengkap data pegawai. Kamu bisa melihat, mengedit, atau menghapus data pegawai melalui halaman ini.">

</head>

<body class="bg-white">
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand fs-3 fw-bold" href="#" aria-label="CRUD Laravel 12 Cuy">
                CRUD Laravel 12 Cuy
            </a>
            <form class="d-flex" role="search">
                <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search" />
                <button type="submit" class="btn btn-outline-primary rounded-pill" aria-label="Cari"><i class="bi bi-search"></i></button>
            </form>
        </div>
    </nav>
    <h3 class="text-center fs-2 fw-bold text-uppercase">View Data Pegawai</h3>
    <p class="text-center text-muted fs-5"> Mau nambah, edit, atau hapus? Tinggal klik tombolnya!</p>
    <p class="text-center text-muted text-capitalize fs-6">
        Total pegawai saat ini: <strong>{{ count($pegawai) }}</strong> pegawai
    </p>
    <div class="w-75 mx-auto mb-3 text-end">
        <a href="/pegawai/tambah" class="btn btn-outline-primary  text-decoration-none" aria-label="Tambah"><i class="bi bi-plus-circle"></i> Tambah Pegawai Baru</a>
    </div>
    <div class="table-responsive w-80 mx-auto">
        <table class="table table-bordered table-hover text-center align-middle w-75 mx-auto">
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
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning text-decoration-none m-1" aria-label="Edit"> <i class="bi bi-pen"></i> Edit</a>
                    <!-- Tombol untuk buka modal (bukan submit) -->
                    <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" aria-label="Hapus" data-bs-target="#hapusModal{{ $p->pegawai_id }}">
                        <i class="bi bi-trash"></i> Hapus
                    </button>

                    <!-- Modal dari library JS Bootstrap-->
                    <div class="modal fade" id="hapusModal{{ $p->pegawai_id }}" aria-labelledby="hapusModalLabel{{ $p->pegawai_id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-danger text-white">
                                    <h5 class="modal-title" id="hapusModalLabel{{ $p->pegawai_id }}">Konfirmasi Hapus</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Yakin ingin menghapus karyawan <strong>{{ $p->pegawai_nama }}</strong>?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Batal">Batal</button>

                                    <!-- Form hapus, tombol submit aseli ada di sini -->
                                    <form action="/pegawai/hapus/{{ $p->pegawai_id }}" method="POST" style="display:inline;">
                                        {{ csrf_field() }}
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" aria-label="Hapus">Hapus</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
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