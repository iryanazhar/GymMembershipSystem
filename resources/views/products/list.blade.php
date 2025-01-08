@extends('layout')

@section('content')
<h1>List of Products</h1>
<div class="products">
    @foreach($products as $product)
    <div class="product-box">
        <h2>{{ $product->name }}</h2>
        <p>Price: RM {{ $product->price }}</p>
        <p>Stock: {{ $product->stock }}</p>
        <p>{{ $product->description }}</p>
        <a href="{{ route('products.edit', $product->id) }}">Edit</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
    @endforeach
</div>
<a href="{{ route('products.create') }}">Add Product</a>
@endsection
