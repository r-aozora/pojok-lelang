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

                            </div>
                          <table class="table table-bordered mt-4" style="text-align: center">
                            <thead>
                                <tr>
                                  <th>ID</th>
                                  <th>Nama Barang</th>
                                  <th>Tanggal</th>
                                  <th>Harga Barang</th>
                                  <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>267111</td>
                                  <td>Rumah</td>
                                  <td>22/05/2002</td>
                                  <td>100.000.000</td>
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
