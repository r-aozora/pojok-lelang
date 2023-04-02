@extends('layout.main')
@section('content')
    <div class="container">
        <h2 class="mt-4">Data Masyarakat</h2>
        <div class="row">
            <div class="col">
                <div class="card mt-4 mb-4">
                    <div class="card-body">
                        <h5 class="card-title mt-2 fw-bold" style="color:#055E68">Data Masyarakat</h5>
                        <div class=" d-flex flex-wrap justify-content-center mt-4">
                        <div class="col-6 col-lg-6 mb-2 mb-lg-0 me-lg-auto" style="white-space:nowrap">
                            <div class="col-sm-6">
                                <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
                                    <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
                                    </form>
                            </div>
                        </div>

                        <div class="text-end col-6 col-lg-6 me-lg-auto">
                            <button type="button" class="btn text-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #055E68">
                                + Tambah
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Masyarakat</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">ID User</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Nama</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Telepon</label>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn" style="border: 1px solid black" data-bs-dismiss="modal">Tutup</button>
                                        <button type="button" class="btn text-white" style="background-color: #055E68">Simpan</button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                        <table class="table table-bordered mt-4" style="text-align: center">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Lengkap</th>
                                <th>Username</th>
                                <th>Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>251131</td>
                                <td>Lintang Balakosa</td>
                                <td>lintangkeren</td>
                                <td><a class="btn text-white" style="background-color:#055E68" href="#" role="button">Detail</i></a></td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
@endsection
