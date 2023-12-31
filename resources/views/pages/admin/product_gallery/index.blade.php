@extends('layouts.parent')

@section('content')

<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Product gallery &raquo; {{ $product->name }}</h5>

            <div class="d-flex justify-content-end">
                <a href="{{ route('dashboard.product.index') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left">
                        Back
                    </i>
                </a>
                <a href="{{ route('dashboard.product.gallery.create', $product) }}" class="btn btn-primary ms-1">
                    <i class="bi bi-plus"></i>
                    Create Product Gallery
                </a>

            </div>

            <!-- Table with stripped rows -->
            <table class="table table-striped datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($items as $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>
                            <img src="{{ $row->url }}" alt="" style="width: 150px" class="img-thumbnail">
                        </td>
                        <td>
                            <form action="{{ route('dashboard.product.gallery.destroy', [$product->id, $row->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="bi bi-trash"></i>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Data Product Gallery kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>
</div>

@endsection