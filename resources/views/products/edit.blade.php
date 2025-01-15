@extends('products.layout')

@section('content')
<div style="background-image: url('{{ asset('img/hero/greekmu.jpeg') }}'); background-size: cover; background-position: center; padding: 70px 20px; min-height: 100vh; position: relative; overflow: hidden;">
    <!-- Edit Product Title -->
    <div style="background-color: black; color: white; text-shadow: 0 0 20px #007bff; text-align: center; padding: 20px; font-size: 24px; font-weight: bold; border-radius: 8px; margin-bottom: 30px; margin-top: 50px;">
        Edit Product
    </div>

    <!-- Edit Product Form -->
    <div class="container" style="margin-top: 50px;">
        <form action="{{ route('products.update', $product->id) }}" method="POST" style="background: #f8f9fa; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 50%; margin: auto;">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="productcode" style="color: #495057;"><strong>Product Code</strong></label>
                <input type="text" id="productcode" name="productcode" class="form-control" value="{{ $product->productcode }}" required style="background-color: white; color: black; padding: 10px; border-radius: 8px; border: 1px solid #ccc; box-shadow: 0 0 5px #007bff;">
            </div>

            <div class="mb-3">
                <label for="name" style="color: #495057;"><strong>Name</strong></label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required style="background-color: white; color: black; padding: 10px; border-radius: 8px; border: 1px solid #ccc; box-shadow: 0 0 5px #007bff;">
            </div>

            <div class="mb-3">
                <label for="price" style="color: #495057;"><strong>Price</strong></label>
                <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}" required style="background-color: white; color: black; padding: 10px; border-radius: 8px; border: 1px solid #ccc; box-shadow: 0 0 5px #007bff;">
            </div>

            <div class="mb-3">
                <label for="stock" style="color: #495057;"><strong>Stock</strong></label>
                <input type="number" id="stock" name="stock" class="form-control" value="{{ $product->stock }}" required style="background-color: white; color: black; padding: 10px; border-radius: 8px; border: 1px solid #ccc; box-shadow: 0 0 5px #007bff;">
            </div>

            <div class="mb-3">
                <label for="description" style="color: #495057;"><strong>Description</strong></label>
                <textarea id="description" name="description" class="form-control" style="background-color: white; color: black; padding: 10px; border-radius: 8px; border: 1px solid #ccc; box-shadow: 0 0 5px #007bff;">{{ $product->description }}</textarea>
            </div>

            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary" style="background-color: #007bff; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif; padding: 10px 20px; border-radius: 8px;">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
