@extends('master.layout')

@section('content')
<h1>Add Product</h1>
<form action="{{ route('products.store') }}" method="POST">
    @csrf
    <input type="text" name="productcode" placeholder="Product Code" required> <!-- Add this line -->
    <input type="text" name="name" placeholder="Product Name" required>
    <input type="number" name="price" placeholder="Price" required>
    <input type="number" name="stock" placeholder="Stock" required>
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit">Save</button>
</form>
@endsection
