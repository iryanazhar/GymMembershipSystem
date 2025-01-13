@extends('master.layout')

@section('content')
<div style="background-image: url('img/hero/hero-2.jpg'); background-size: cover; background-position: center; padding: 70px 20px; min-height: 100vh;">
    <!-- Adjust the heading position -->
    <h1 style="text-align: center; color: white; margin-bottom: 50px; padding-top: 20px;">List of Products</h1>

    <!-- Search Input -->
    <div class="container" style="margin-top: 30px;">
        <div class="mb-3 d-flex justify-content-center">
            <input type="text" id="searchInput" class="form-control" placeholder="Search Products..." onkeyup="searchProducts()" style="background-color: black; color: blue; font-family: 'Arial', sans-serif; font-size: 16px; padding: 10px; border-radius: 8px; border: 1px solid #333; box-shadow: 0 0 5px blue; width: 50%;">
        </div>

        <!-- Center the product cards -->
        <div class="products d-flex flex-wrap justify-content-center" style="margin-bottom: 50px;">
            @foreach($products as $product)
            <div class="product-box" style="background: black; padding: 15px; margin: 10px; border-radius: 8px; width: 300px; box-shadow: 0 0 10px blue; border: 1px solid blue;">
                <p style="color: blue; text-shadow: 0 0 5px blue;"><strong>Product Code:</strong> {{ $product->productcode }}</p>
                <h2 style="background-color: #81D8D0; color: #ff1493; text-shadow: 0 0 20px #ff1493; padding: 10px; border-radius: 5px; box-shadow: 0 0 15px #81D8D0;">{{ $product->name }}</h2>
                <p style="color: blue; text-shadow: 0 0 5px blue;"><strong>Price:</strong> RM {{ $product->price }}</p>
                <p style="color: blue; text-shadow: 0 0 5px blue;"><strong>Stock:</strong> {{ $product->stock }}</p>
                <p style="color: blue; text-shadow: 0 0 5px blue;">{{ $product->description }}</p>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary" style="background-color: blue; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="background-color: red; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Delete</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Center and adjust the Add Product button -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="{{ route('products.create') }}" class="btn btn-success" style="background-color: green; color: white; padding: 10px 20px; font-size: 18px; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Add Product</a>
    </div>
</div>

<script>
    function searchProducts() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const products = document.getElementsByClassName('product-box');

        for (let i = 0; i < products.length; i++) {
            const product = products[i];
            const textContent = product.textContent || product.innerText;

            product.style.display = textContent.toLowerCase().indexOf(filter) > -1 ? "" : "none";
        }
    }
</script>
@endsection
