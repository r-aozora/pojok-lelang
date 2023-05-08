@extends('layout.main')

@section('content')
    <div class="container mb-3">
        <h2 class="mt-3">Detail Petugas</h2>
        <div class="row">
            <div class="col">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <div class="card-header mb-3" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-medium text-light">{{ $petugas->nama }}</h5>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                @if ($petugas->level === 'Administrator')
                                    <img src="../../img/avatar-admin.png" class="mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px; border-radius:100px">    
                                @elseif ($petugas->level === 'Petugas')
                                    <img src="../../img/avatar-petugas.png" class="mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px; border-radius:100px">
                                @elseif ($petugas->level === 'Masyarakat')
                                    <img src="../../img/avatar-masyarakat.png" class="mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px; border-radius:100px">
                                @endif
                            </div>
                            <div class="col-9">
                                <form>
                                    @csrf
                                    <div class="form-outline mb-3">
                                        <label for="id">ID Petugas</label>
                                        <input type="text" class="form-control" id="id" value="{{ $petugas->id }}" readonly>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="nama">Nama Petugas</label>
                                        <input type="text" class="form-control" id="nama" value="{{ $petugas->nama }}" readonly>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" value="{{ $petugas->username }}" readonly>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" value="{{ $petugas->password }}" readonly>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="level">Level</label>
                                        <input class="form-control" id="level" value="{{ $petugas->level }}" readonly>
                                    </div>
                                    <div>
                                        <a href="{{ url('petugas') }}"  class="btn btn-outline"><i class="bi bi-arrow-left"></i> Kembali</a>
                                        <a href="{{ url('petugas/'.$petugas->id.'/edit') }}" class="btn text-white" style="background-color: #055E68"><i class="bi bi-pencil-square"></i> Edit</a>
                                        <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('petugas/'.$petugas->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn text-white" style="background-color: #055E68" role="button"><i class="bi bi-trash"></i> Hapus</button>
                                        </form>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection