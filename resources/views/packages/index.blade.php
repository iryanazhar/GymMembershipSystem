@extends('master.layout')

@section('content')
<div style="background-image: url('{{ asset('img/hero/hero-2.jpg') }}'); background-size: cover; background-position: center; padding: 100px 20px 70px; min-height: 100vh;">
    <!-- Adjust the heading position -->
    <h1 style="text-align: center; color: white; margin-bottom: 70px; padding-top: 70px;">LIST OF PACKAGES</h1>

    <!-- Search Input -->
    <div class="container" style="margin-top: 50px;">
        <div class="mb-3 d-flex justify-content-center">
            <input type="text" id="searchInput" class="form-control" placeholder="Search Packages..." onkeyup="searchPackages()" style="background-color: white; color: black; font-family: 'Arial', sans-serif; font-size: 16px; padding: 10px; border-radius: 8px; border: 1px solid #ccc; box-shadow: 0 0 5px #007bff; width: 50%;">
        </div>

        <!-- Center the package cards -->
        <div class="packages d-flex flex-wrap justify-content-center" style="margin-bottom: 70px;">
            @foreach($packages as $package)
            <div class="package-box" style="background: #f8f9fa; padding: 15px; margin: 20px 10px; border-radius: 8px; width: 300px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border: 1px solid #dee2e6;">
                <h2 style="background-color: #007bff; color: white; padding: 10px; border-radius: 5px; box-shadow: 0 0 15px rgba(0, 123, 255, 0.5);">{{ $package->name }} [{{ $package->id }}]</h2>
                <p style="color: #495057;">{!! nl2br(e($package->description)) !!}</p>
                <p style="color: #495057;"><strong>Price:</strong> RM {{ $package->price }}</p>
                <div class="btn-box d-flex justify-content-center" style="gap: 10px;">
                    <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-primary" style="background-color: #007bff; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Edit</a>
                    <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline; margin-bottom: 0;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" style="background-color: #dc3545; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Center and adjust the Add Package button -->
    <div style="text-align: center; margin-top: 10px;">
        <a href="{{ route('packages.create') }}" class="btn btn-success" style="background-color: #28a745; color: white; padding: 10px 20px; font-size: 18px; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Add Package</a>
    </div>
</div>

<script>
    function searchPackages() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const packages = document.getElementsByClassName('package-box');

        for (let i = 0; i < packages.length; i++) {
            const packageElement = packages[i];
            const textContent = packageElement.textContent || packageElement.innerText;

            packageElement.style.display = textContent.toLowerCase().indexOf(filter) > -1 ? "" : "none";
        }
    }
</script>
@endsection
