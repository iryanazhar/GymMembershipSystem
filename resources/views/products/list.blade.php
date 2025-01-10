@extends('master.layout')

@section('content')
<div style="background-image: url('img/hero/hero-2.jpg'); background-size: cover; background-position: center; padding: 70px 20px; min-height: 100vh;">
    <!-- Adjust the heading position -->
    <h1 style="text-align: center; color: white; margin-bottom: 50px; padding-top: 20px;">List of Products</h1>

    <!-- Center the product cards -->
    <div class="products d-flex flex-wrap justify-content-center" style="margin-bottom: 50px;">
        @foreach($products as $product)
        <div class="product-box" style="background: rgba(255, 255, 255, 0.8); padding: 15px; margin: 10px; border-radius: 8px; width: 300px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
            <p style="color: #000;"><strong>Product Code:</strong> {{ $product->productcode }}</p>
            <h2 style="background-color: #81D8D0; color: white; padding: 10px; border-radius: 5px;">{{ $product->name }}</h2>
            <p style="color: #000;"><strong>Price:</strong> RM {{ $product->price }}</p>
            <p style="color: #000;"><strong>Stock:</strong> {{ $product->stock }}</p>
            <p style="color: #000;">{{ $product->description }}</p>
            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary" style="background-color: blue; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Edit</a>
            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="background-color: red; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Delete</button>
            </form>
        </div>
        @endforeach
    </div>

    <!-- Center and adjust the Add Product button -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="{{ route('products.create') }}" class="btn btn-success" style="background-color: green; color: white; padding: 10px 20px; font-size: 18px; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Add Product</a>
    </div>
</div>
@endsection
