@if ($errors->any())
    <div class="alert alert-warning alert-dismissible fade show" role="alert"> 
        <i class="bi bi-exclamation-triangle me-1"></i> 
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if (Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert"> 
        <i class="bi bi-check-circle me-1"></i> 
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
