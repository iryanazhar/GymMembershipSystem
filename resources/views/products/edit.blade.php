@extends('master.layout')

@section('content')
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/barfiller.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
@vite(['resources/css/app.css', 'resources/js/app.js'])

<!-- Add Google Font for "Poppins" or "Bebas Neue" -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

<div class="hero-section" style="padding: 70px 20px; min-height: 100vh;">
    <style>
        .hero-section {
            background-image: url('{{ asset('img/hero/hero-2.jpg') }}');
            background-size: cover;
            background-position: center;
        }
        h1 {
            text-align: center;
            color: white;
            margin-bottom: 50px;
            padding-top: 20px;
        }
        .container {
            max-width: 600px;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
        }
        .form-group label {
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            letter-spacing: 1px;
            color: #fff;
        }
        .form-group input, .form-group select, .form-group textarea {
            font-family: 'Poppins', sans-serif;
        }
        .form-control {
            border-radius: 10px;
            border: 1px solid #ccc;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .form-control:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 10px rgba(76, 175, 80, 0.5);
        }
        .btn {
            border-radius: 25px;
            padding: 10px 20px;
            font-weight: bold;
        }
        .btn-primary {
            background-color: #4CAF50;
            color: white;
            border: none;
        }
        .btn-primary:hover {
            background-color: #45a049;
        }
    </style>

    <h1 style="text-align: center; color: white; margin-bottom: 70px; padding-top: 20px;"></h1>

    <div class="container">
        <form action="{{ route('products.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="productcode">Product Code</label>
                <input type="text" id="productcode" name="productcode" class="form-control" value="{{ $product->productcode }}" required>
            </div>

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" class="form-control" value="{{ $product->price }}" required>
            </div>

            <div class="form-group">
                <label for="stock">Stock</label>
                <input type="number" id="stock" name="stock" class="form-control" value="{{ $product->stock }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control" rows="4">{{ $product->description }}</textarea>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
<script src="{{ asset('js/jquery.barfiller.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

@endsection
