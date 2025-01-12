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

<div class="hero-section" style="padding: 70px 20px; min-height: 100vh;">
    <style>
        .hero-section {
            background-image: url('{{ asset('img/hero/hero-2.jpg') }}');
            background-size: cover;
            background-position: center;
        }
    </style>
    <h1 style="text-align: center; color: white; margin-bottom: 50px; padding-top: 20px;">Add New Member</h1>

    <div class="container" style="max-width: 600px;">
    <!-- Form to Add New Member -->
    <form action="{{ route('members.store') }}" method="POST">
        @csrf <!-- Token for CSRF protection -->

        <!-- User ID Input (Required) -->
        <div class="form-group">
            <label for="id" style="color: white;">Member ID</label>
            <input type="text" class="form-control" name="id" value="{{ old('id') }}" required>
            @error('id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Input for Member's Name -->
        <div class="form-group">
            <label for="name" style="color: white;">Member Name</label>
            <input type="text" name="name" id="name" class="form-control" required placeholder="Enter member's name">
        </div>

        <!-- Input for Member's Phone Number -->
        <div class="form-group">
            <label for="contact_information" style="color: white;">Phone Number</label>
            <input type="text" name="contact_information" id="contact_information" class="form-control" required placeholder="Enter member's phone number">
        </div>

        <!-- Membership Package name (Dropdown for selecting package) -->
        <div class="form-group">
            <label for="membership_package_id" style="color: white;">Package Name</label>
            <select name="membership_package_id" id="membership_package_id" class="form-control" required>
                <option value="basic">Basic</option>
                <option value="pro">Pro</option>
                <option value="student">Student</option>
                <option value="daily_access">Daily Access</option>
            </select>
        </div>

        <!-- Dropdown for Gender -->
        <div class="form-group">
            <label for="gender" style="color: white;">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <!--<option value="other">Other</option>-->
            </select>
        </div>

        <!-- Input for Join Date -->
        <div class="form-group">
            <label for="join_date">Join Date</label>
            <input type="date" name="join_date" id="join_date" class="form-control" required>
        </div>

        <!-- Dropdown for Status -->
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="active">Active</option>
                <option value="inactive">Inactive</option>
            </select>
        </div>

        <!-- Submit Button to Add Member -->
        <div class="form-group text-center">
        <button type="submit" class="btn btn-success mt-3">Add Member</button>
    </form>
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
