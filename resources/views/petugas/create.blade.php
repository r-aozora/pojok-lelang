@extends('layout.main')

@section('content')
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Form Validation</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Forms</li>
                    <li class="breadcrumb-item active">Validation</li>
                </ol>
            </nav>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Custom Styled Validation</h5>
                            <p>For custom Bootstrap form validation messages, you’ll need to add the <code>novalidate</code> boolean attribute to your <code>&lt;form&gt;</code>. This disables the browser default feedback tooltips, but still provides access to the form validation APIs in JavaScript.</p>
                            <form class="row g-3 needs-validation" novalidate>
                                <div class="form-outline">
                                    <label for="id" class="form-label">ID Petugas</label> 
                                    <input type="text" class="form-control" id="id" value="" required>
                                    <div class="valid-feedback"> Looks good!</div>
                                </div>
                                <div class="form-outline">
                                    <label for="nama" class="form-label">Nama Petugas</label> 
                                    <input type="text" class="form-control" id="nama" value="" required>
                                    <div class="valid-feedback"> Looks good!</div>
                                </div>
                                <div class="form-outline">
                                    <label for="username" class="form-label">Username</label>
                                    <input type="text" class="form-control" id="username" aria-describedby="inputGroupPrepend" required>
                                    <div class="invalid-feedback"> Please choose a username.</div>
                                </div>
                                <div class="form-outline">
                                    <label for="password" class="form-label">Password</label> 
                                    <input type="text" class="form-control" id="password" required>
                                    <div class="invalid-feedback"> Please provide a valid city.</div>
                                </div>
                                <div class="form-outline">
                                    <label for="level" class="form-label">Level</label> 
                                    <select class="form-select" id="level" required>
                                        <option selected disabled value="">Choose...</option>
                                        <option>...</option>
                                    </select>
                                    <div class="invalid-feedback"> Please select a valid state.</div>
                                </div>
                                <div> 
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection