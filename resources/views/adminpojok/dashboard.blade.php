@extends('layout.main')
@section('content')
        <div class="container">
            <h2 class="mt-4">Dashboard</h2>
            <div class="row">
                <div class="col">
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                          <h5 class="card-title mt-2 mb-4 fw-bold" style="color:#055E68">Profile</h5>
                          <div class="row">
                            <div class="col-3">
                                <img src="../dist/img/diaz.png" class="rounded mx-auto d-block img-fluid" alt="">
                            </div>
                            <div class="col-9">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="lintang" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="lintangkeren" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="akuganteng" disabled>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Level</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="admin" disabled>
                                </div>
                            </div>
                          </div>
                        </div>

                      </div>
                </div>
            </div>
        </div>
        <div class="container mb-4">
            <div class="row">
                <div class="col">
                    <div class="card mt-4 mb-4">
                        <div class="card-body">
                          <h5 class="card-title mt-2 fw-bold" style="color:#055E68">Menu Administrator</h5>
                          <table class="table table-bordered mt-4" style="text-align: center">
                            <thead>
                              <tr>
                                <th><i class="bi bi-people px-1"></i>Data Masyarakat</th>
                                <th><i class="bi bi-box px-1"></i>Data Petugas</th>
                                <th><i class="bi bi-box2 px-1"></i>Data Barang</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td><a class="btn text-white" style="background-color:#055E68" href="#" role="button">Buka<i class="bi bi-door-open px-1"></i></a></td>
                                <td><a class="btn text-white" style="background-color:#055E68" href="#" role="button">Buka<i class="bi bi-door-open px-1"></i></a></td>
                                <td><a class="btn text-white" style="background-color:#055E68" href="#" role="button">Buka<i class="bi bi-door-open px-1"></i></a></td>
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
