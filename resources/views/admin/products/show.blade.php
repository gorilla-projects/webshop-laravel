@extends('admin.layouts.app')

@section('content')
    <div class="card" style="width: 18rem;">
        <img src="/images/shop/{{ $product->media->first()->file_name }}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">{{ $product->description }}</p>
            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
@endsection
