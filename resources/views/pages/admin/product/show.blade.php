@extends('layouts.parent')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Show Product <span><strong>{{ $product->name }}</strong></span></h5>
            
            <div class="col-12">
                <label for="inputName4" class="form-label">Name Product</label>
                <input type="text" class="form-control" id="inputName4" name="name" value="{{ $product->name }}" disabled>
            </div>

            <div class="col-12">
                <label for="inputName4" class="form-label">Price Product</label>
                <input type="number" class="form-control" id="inputName4" min="0" name="price" value="{{ $product->price }}" disabled>
            </div>

            <div class="col-12">
                <label for="inputName4" class="form-label">Category Product</label>
                <input type="text" class="form-control" id="inputName4" min="0" name="price" value="{{ $product->category->name }}" disabled>
            </div>

            <div class="col-12">
                <label for="inputName4" class="form-label">Description Product</label>
                <textarea name="description" id="description" cols="30" rows="10" disabled>{!! $product->description !!}</textarea>
            </div>

            <div class="text-end mt-2">
                <a href="{{ route('dashboard.product.index') }}" class="btn btn-primary mt-2">
                    <i class="bi bi-arrow-left"></i>
                    Back
                </a>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection