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
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page content-->
    <div class="container mt-3 p-5">

        <h1>Penerbit</h1>

        <button type="button" class="btn btn-primary btn-tambah">Tambah Data</button>

        <table class="table table-striped" id="table">
            <thead>
                <td>Nama Penerbit</td>
                <td>Alamat</td>
                <td>Nomor Telepon</td>
                <td>Aksi</td>
            </thead>
            <tbody>
            </tbody>

        </table>

    </div>

    <!-- Modal Tambah -->
    <div class="modal fade" id="modal-tambah" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Tambah Data
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-tambah" method="post">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Penerbit</label>
                            <input type="text" name="nama_penerbit" class="form-control" placeholder="nama penerbit">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" placeholder="nomor telepon" name="no_telepon">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Update -->
    <div class="modal fade" id="modal-update" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
        role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">
                        Updata Data
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="form-update">
                    <div class="modal-body">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama Penerbit</label>
                            <input type="text" name="nama_penerbit" id="nama_penerbit" class="form-control"
                                placeholder="nama penerbit">
                            <input type="hidden" name="id_penerbit" id="id_penerbit">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nomor Telepon</label>
                            <input type="text" class="form-control" id="no_telepon" placeholder="nomor telepon"
                                name="no_telepon">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('js/scripts.js') }}"></script>

    <script>
        $(document).ready(function() {

            function data() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('modal.index') }}",
                    dataType: "JSON",
                    beforeSend: function() {
                        $('#table tbody tr').remove();
                    },
                    success: function(response) {
                        if (response) {

                            $.each(response.data, function(index, value) {
                                $('#table tbody').append(`<tr>
                                    <td>${value.nama_penerbit}</td>
                                    <td>${value.alamat}</td>
                                    <td>${value.no_telepon}</td>
                                    <td>
                                        <button type='button' class="btn btn-primary btn-sm btn-ubah"
                                        data-id-penerbit="${value.id}"
                                        data-nama-penerbit="${value.nama_penerbit}"
                                        data-alamat="${value.alamat}"
                                        data-no-telepon="${value.no_telepon}"
                                        >Ubah</button>
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                    </td>
                                    </tr>`);
                            });

                        }
                    }
                });
            }

            data()

            // Modal Tambah
            $('.btn-tambah').click(function(e) {
                e.preventDefault();
                $('#modal-tambah').modal('show')
            });

            // Form Tambah
            $('#form-tambah').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "POST",
                    url: "{{ route('modal.store') }}",
                    data: $(this).serialize(),
                    dataType: "JSON",
                    success: function(response) {
                        data()
                        $('#modal-tambah').modal('hide')
                    }
                });

            });

            // Modal Update
            $('#table tbody').on('click', '.btn-ubah', function (events) {
                events.preventDefault()

                $('#id_penerbit').val($(this).data('id-penerbit'))
                $('#nama_penerbit').val($(this).data('nama-penerbit'))
                $('#alamat').val($(this).data('alamat'))
                $('#no_telepon').val($(this).data('no-telepon'))
                $('#modal-update').modal('show')
            });

            // Form Update
            $('#form-update').submit(function(e) {
                e.preventDefault();

                $.ajax({
                    type: "PUT",
                    url: "{{ route('modal.update') }}",
                    data: $(this).serialize(),
                    dataType: "JSON",
                    success: function(response) {
                        data()
                        $('#modal-update').modal('hide')
                    }
                });

            });

        });
    </script>
</body>

</html>
