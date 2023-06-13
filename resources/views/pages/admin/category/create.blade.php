@extends('layouts.parent')

@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-1"></i>
        {!! session('success') !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @elseif(session('error'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-1"></i>
        {!! session('error') !!}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create Category</h5>
            <form class="row g-3" action="{{ route('dashboard.category.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputName4" class="form-label">Name Category</label>
                        <input type="text" class="form-control" id="inputName4" name="name" value="">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
