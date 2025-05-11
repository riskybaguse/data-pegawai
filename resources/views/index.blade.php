<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial Membuat CRUD Pada Laravel</title>
</head>

<body>
    <h3>Data Pegawai</h3>
    <a href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
    <br>
    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>
        @foreach($pegawai as $p)
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan}}</td>
            <td>{{ $p->pegawai_umur}}</td>
            <td>{{ $p->pegawai_alamat}}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->id }}">Edit</a>
                |
                <a href="/pegawai/hapus/{{ $p->id }}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>