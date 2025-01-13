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

<style>
    .hero-section {
        background-image: url('{{ asset('img/hero/hero-2.jpg') }}');
        background-size: cover;
        background-position: center;
        padding: 70px 20px;
        min-height: 100vh;
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
        font-family: 'Poppins', sans-serif; /* Change to Bebas Neue or any desired font */
        font-weight: 500; /* Adjust as necessary */
        letter-spacing: 1px;
        color: #fff;
    }
    .form-group input, .form-group select {
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
    .btn-success {
        background-color: #4CAF50;
        color: white;
        border: none;
    }
    .btn-success:hover {
        background-color: #45a049;
    }
    .alert-danger {
        border-radius: 10px;
        background-color: #f8d7da;
        color: #721c24;
    }
</style>

<div class="hero-section">
    <h1></h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <!-- Form to Add New Member -->
    <div class="container">
        <form action="{{ route('members.store') }}" method="POST">
            @csrf <!-- Token for CSRF protection -->

            <div class="form-group">
                <label for="id">Member ID</label>
                <input type="text" class="form-control" name="id" value="{{ old('id') }}" required>
            </div>

            <div class="form-group">
                <label for="name">Member Name</label>
                <input type="text" name="name" id="name" class="form-control" required placeholder="Enter member's name">
            </div>

            <div class="form-group">
                <label for="contact_information">Phone Number</label>
                <input type="text" name="contact_information" id="contact_information" class="form-control" required placeholder="Enter member's phone number">
            </div>

            <div class="form-group">
                <label for="membership_package_id">Package Name</label>
                <select name="membership_package_id" id="membership_package_id" class="form-control" required>
                    @foreach ($package as $pkg)
                        <option value="{{ $pkg->id }}">{{ $pkg->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="gender">Gender</label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>

            <div class="form-group">
                <label for="join_date">Join Date</label>
                <input type="date" name="join_date" id="join_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-success mt-3">Add Member</button>
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
