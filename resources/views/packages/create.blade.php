@extends('master.layout-new')

@section('content')
<div style="background-image: url('{{ asset('img/hero/hero-2.jpg') }}'); background-size: cover; background-position: center; padding: 70px 20px; min-height: 100vh;">
    <h1 style="text-align: center; color: white; margin-bottom: 30px;">Add New Package</h1>

    <div class="form-container" style="background: rgba(255, 255, 255, 0.8); padding: 30px; border-radius: 8px; width: 60%; margin: 0 auto; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
        <form action="{{ route('packages.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" style="font-weight: bold;">Package Name:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter package name" required>
            </div>

            <div class="form-group">
                <label for="price" style="font-weight: bold;">Price (RM):</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Enter price" required>
            </div>

            {{-- <div class="form-group">
                <label for="duration" style="font-weight: bold;">Duration (days):</label>
                <input type="number" name="duration" id="duration" class="form-control" placeholder="Enter duration" required>
            </div> --}}

            <div class="form-group">
                <label for="description" style="font-weight: bold;">Description:</label>
                <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter description"></textarea>
            </div>

            <div style="text-align: center; margin-top: 20px;">
                <button type="submit" class="btn btn-success" style="padding: 10px 20px; font-size: 18px; font-weight: bold;">Create Package</button>
            </div>
        </form>
    </div>
</div>
@endsection
