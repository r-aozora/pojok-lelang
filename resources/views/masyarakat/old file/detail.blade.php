@extends('layout.main')

@section('content')
    <div class="container mb-3">
        <h2 class="mt-3">Detail Masyarakat</h2>
        <div class="row">
            <div class="col">
                <div class="card mt-3 mb-3">
                    <div class="card-body">
                        <div class="card-header mb-3" style="background-color:#055E68; max-height:60px">
                            <h5 class="card-title mt-2 fw-medium text-light">{{ $masyarakat->nama }}</h5>
                        </div>
                        <div class="row">
                            <div class="col-3">
                                @if ($masyarakat->level === 'Administrator')
                                    <img src="../img/avatar-admin.png" class="mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px; border-radius:100px">    
                                @elseif ($masyarakat->level === 'Petugas')
                                    <img src="../img/avatar-petugas.png" class="mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px; border-radius:100px">
                                @elseif ($masyarakat->level === 'Masyarakat')
                                    <img src="../img/avatar-masyarakat.png" class="mx-auto d-block img-fluid" alt="" style="weight:200px; height:200px; border-radius:100px">
                                @endif
                            </div>
                            <div class="col-9">
                                <form action="" method="">
                                    @csrf
                                    <div class="form-outline mb-3">
                                        <label for="id">ID Masyarakat</label>
                                        <input type="text" class="form-control" id="id" value="{{ $masyarakat->id }}" readonly>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="nama">Nama Lengkap</label>
                                        <input type="text" class="form-control" id="nama" value="{{ $masyarakat->nama }}" readonly>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" value="{{ $masyarakat->username }}" readonly>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" value="{{ $masyarakat->password }}" readonly>
                                    </div>
                                    <div class="form-outline mb-3">
                                        <label for="level">Level</label>
                                        <input class="form-control" id="level" value="{{ $masyarakat->level }}" readonly>
                                    </div>
                                    <div>
                                        @if (auth()->user()->level === 'Administrator' || auth()->user()->level == 'Petugas')
                                            <a href="{{ url('masyarakat') }}"  class="btn btn-outline"><i class="bi bi-arrow-left"></i> Kembali</a>
                                            @if (auth()->user()->level === 'Administrator')
                                                <a href="{{ url('masyarakat/'.$masyarakat->id.'/edit') }}" class="btn text-white" style="background-color: #055E68"><i class="bi bi-pencil-square"></i> Edit</a>
                                                <form onsubmit="return confirm('Data Akan Dihapus')" action="{{ url('masyarakat/'.$masyarakat->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn text-white" style="background-color: #055E68" role="button"><i class="bi bi-trash"></i> Hapus</button>
                                                </form>
                                            @endif
                                        @endif
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