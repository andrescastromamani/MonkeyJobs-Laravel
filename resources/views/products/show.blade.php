@extends('products.layout')
@section('content')
    <div class="d-flex justify-content-center mt-5">
        <div class="shadow-none p-3 mb-5 bg-light rounded w-50">
            <h3>{{ $product->name }}</h3>
            <hr>
            <p>{{ $product->description }}</p>
        </div>
    </div>
@endsection
