@extends('layouts.parent')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Show Product</h5>

            <form action="{{ route('dashboard.product.update', $product->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputName4" class="col-sm-2 col-form-label">Name Product</label>
                        <input type="text" class="form-control" id="inputName4" name="name" value="{{ $product->name }}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label for="inputName4" class="col-sm-2 col-form-label">Price Product</label>
                        <input type="number" class="form-control" id="inputName4" min="0" name="price" value="{{ $product->price }}">
                    </div>
                </div>                

                <div class="col-12">
                    <label class="col-sm-2 col-form-label">Select Category product</label>
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option selected value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                        <option selected>===Pilih Category===</option>
                        @foreach ($category as $row)
                        <option value="{{ $row->id }}">{{ $row->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12">
                    <label class="col-sm-2 col-form-label">Label product</label>
                    <textarea name="description" id="description" cols="30" rows="10">{{ $product->description }}</textarea>
                </div>

                <div class="col-md-12 mt-2">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>

<script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection