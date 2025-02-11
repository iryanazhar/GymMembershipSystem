@extends('master.layout')

@section('content')
<div style="background-image: url('img/hero/hero-2.jpg'); background-size: cover; background-position: center; padding: 70px 20px; min-height: 100vh;">
    <!-- Adjust the heading position -->
    <h1 style="text-align: center; color: white; margin-bottom: 50px; padding-top: 100px;">LIST OF CLASSES</h1>

    <!-- Search Input -->
    <div class="container" style="margin-top: 30px;">
        <div class="mb-3 d-flex justify-content-center">
            <input type="text" id="searchInput" class="form-control" placeholder="Search Classes..." onkeyup="searchClasses()" style="background-color: white; color: white; font-family: 'Arial', sans-serif; font-size: 16px; padding: 10px; border-radius: 8px; border: 1px solid #ccc; box-shadow: 0 0 5px #007bff; width: 50%;">
        </div>

        <!-- Center the class cards -->
        <div class="classes d-flex flex-wrap justify-content-center" style="margin-bottom: 50px;">
            @foreach($classes as $class)
            <div class="class-box" style="background: white; padding: 15px; margin: 10px; border-radius: 8px; width: 300px; border: 0px solid blue;">
                <p style="color: #495057; : 0 0  blue;"><strong>Class Code:</strong> {{ $class->classcode }}</p>
                <h2 style="background-color: #007bff; color: white; text-shadow: 0 0 0px #ff1493; padding: 10px; border-radius: 5px; box-shadow: #81D8D0;">{{ $class->name }}</h2>
                <p style="color: #495057; : 0 0  blue;"><strong>Time:</strong> {{ $class->time }}</p>
                <p style="color: #495057; : 0 0  blue;"><strong>Duration:</strong> {{ $class->duration }} minutes</p>
                <p style="color: #495057; ;"><strong>Capacity:</strong> {{ $class->capacity }}</p>
                <p style="color: #495057; ;"><strong>Trainer:</strong> {{ $class->trainer->name }}</p>
                <p style="color: #495057;  ;">{{ $class->description }}</p>
                <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-primary" style="background-color: #007bff; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Edit</a>
                <form action="{{ route('classes.destroy', $class->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" style="background-color: #dc3545; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Delete</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Center and adjust the Add Class button -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="{{ route('classes.create') }}" class="btn btn-success" style="background-color: green; color: white; padding: 10px 20px; font-size: 18px; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Add Class</a>
    </div>
</div>

<script>
    function searchClasses() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const classes = document.getElementsByClassName('class-box');

        for (let i = 0; i < classes.length; i++) {
            const classBox = classes[i];
            const textContent = classBox.textContent || classBox.innerText;

            classBox.style.display = textContent.toLowerCase().indexOf(filter) > -1 ? "" : "none";
        }
    }
</script>
@endsection
