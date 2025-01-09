@extends('layout')

@section('content')
<h1>Edit Product</h1>
<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="productcode" value="{{ $product->productcode }}" required> <!-- Add this line -->
    <input type="text" name="name" value="{{ $product->name }}" required>
    <input type="number" name="price" value="{{ $product->price }}" required>
    <input type="number" name="stock" value="{{ $product->stock }}" required>
    <textarea name="description">{{ $product->description }}</textarea>
    <button type="submit">Update</button>
</form>
@endsection
