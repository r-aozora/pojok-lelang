@extends('layout.main')

@section('content')
    <div>
        <h5>Hallo, {{ Auth::user()->nama }}</h5>

    </div>
@endsection
