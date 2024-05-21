<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Bare - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
</head>

<body>

    @include('layout.header')

    <!-- Page content-->
    <div class="container mt-3 p-5">

        <h1>Penerbit</h1>

        <a href="/tambah" class="btn btn-primary">Tambah Data</a>

        <table class="table table-striped">
            <thead>
                <td>Nama Buku</td>
                <td>Nama Penerbit</td>
                <td>Tahun Buku</td>
                <td>Jumlah Buku</td>
                <td>Aksi</td>
            </thead>
            <tbody>
                @forelse ($buku as $p)
                    <tr>
                        <td>{{ $p->judul_buku }}</td>
                        <td>{{ $p->penerbit->nama_penerbit }}</td>
                        <td>{{ $p->tahun_buku ?? 'No Telepon tidak ada'  }}</td>
                        <td>{{ $p->jumlah_buku ?? 'No Telepon tidak ada'  }}</td>
                        <td>
                          <a href="{{ url('ubah/' . $p->id) }}" class="btn btn-primary btn-sm">Ubah</a>
                          <a href="{{ url('hapus/' . $p->id) }}" class="btn btn-danger btn-sm">Hapus</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">Data Tidak Ada</td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
