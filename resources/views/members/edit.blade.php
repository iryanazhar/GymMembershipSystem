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
        margin-bottom: 100px;
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
    <h1 style="text-align: center; color: white; margin-bottom: 50px; padding-top: 20px;"></h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container" style="max-width: 600px;">
        <!-- Form for Editing Member -->
        <form action="{{ route('members.update', $member->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- User ID (Read-Only as it can't be changed (PK)) -->
            <div class="form-group">
                <label for="id" style="color: white;">Member ID</label>
                <input type="text" class="form-control" name="id" value="{{ old('id', $member->id) }}" readonly>
            </div>

            <!-- Name Input -->
            <div class="form-group">
                <label for="name" style="color: white;">Member Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $member->name) }}" required>
            </div>

            <!-- Contact Information Input -->
            <div class="form-group">
                <label for="contact_information" style="color: white;">Phone Number</label>
                <input type="text" class="form-control" name="contact_information" value="{{ old('contact_information', $member->contact_information) }}" required>
            </div>

            <!-- Gender Input -->
            <div class="form-group">
                <label for="gender" style="color: white;">Gender</label>
                <select class="form-control" name="gender" required>
                    <option value="male" {{ old('gender', $member->gender) == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender', $member->gender) == 'female' ? 'selected' : '' }}>Female</option>
                    <!--<option value="other" {{ old('gender', $member->gender) == 'other' ? 'selected' : '' }}>Other</option>-->
                </select>
            </div>

            <!-- Membership Package name Input (Dropdown for selecting package) -->
            <div class="form-group">
                <label for="membership_package_id" style="color: white;">Package Name</label>
                <select class="form-control" name="membership_package_id" required>
                    @foreach ($package as $pkg)
                        <option value="{{ $pkg->id }}">{{ $pkg->name }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Join Date Input -->
            <div class="form-group">
                <label for="join_date" style="color: white;">Join Date</label>
                <input type="date" class="form-control" name="join_date" value="{{ old('join_date', $member->join_date) }}" required>
            </div>

            <!-- Status Input -->
            <div class="form-group">
                <label for="status" style="color: white;">Status</label>
                <select class="form-control" name="status" required>
                    <option value="active" {{ old('status', $member->status) == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status', $member->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="background-color: #45a049; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Update Member</button>
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



