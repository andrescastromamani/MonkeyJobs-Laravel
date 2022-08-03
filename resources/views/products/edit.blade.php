@extends('products.layout')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="mt-5 w-50">
            <h2 class="text-center">Edit Product</h2>
            <form method="POST" action="{{ url('products/' . $product->id) }}">
                @csrf
                @method('PUT')
                <input type="hidden" id="id" name="id" value="{{ $product->id }}">
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " id="name"
                        name="name" value="{{ $product->name }}">
                    @error('name')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror " id="description"
                        name="description" value="{{ $product->description }}">
                    @error('description')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
