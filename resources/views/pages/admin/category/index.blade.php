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
            <h5 class="card-title">Category</h5>

            <div class="d-flex justify-content-end">
                <a href="{{ route('dashboard.category.create') }}" class="btn btn-primary">Create</a>
            </div>

            <!-- Table with stripped rows -->
            <table class="table table-striped datatable">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Slug</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($category as $row)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->slug }}</td>
                        <td>
                            <a href="{{ route('dashboard.category.show', $row->id ) }}" class="btn btn-info">
                                <i class="bi bi-eye"></i>
                                Show
                            </a>
                            <a href="{{ route('dashboard.category.edit', $row->id ) }}" class="btn btn-warning">
                                <i class="bi bi-pencil"></i>
                                Edit
                            </a>
                            <form action="{{ route('dashboard.category.destroy', $row->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger mt-2">
                                    <i class="bi bi-trash">
                                        Delete
                                    </i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Data kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <!-- End Table with stripped rows -->

        </div>
    </div>
    @endsection