@extends('master.layout')

@section('content')
<div style="background-image: url('img/hero/hero-2.jpg'); background-size: cover; background-position: center; padding: 70px 20px; min-height: 100vh;">
    <!-- Adjust the heading position -->
    <h1 style="text-align: center; color: white; margin-bottom: 50px; padding-top: 20px;">List of Classes</h1>

    <!-- Center the class cards -->
    <div class="classes d-flex flex-wrap justify-content-center" style="margin-bottom: 50px;">
        @foreach($classes as $class)
        <div class="class-box" style="background: rgba(255, 255, 255, 0.8); padding: 15px; margin: 10px; border-radius: 8px; width: 300px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
            <p style="color: #000;"><strong>Class Code:</strong> {{ $class->classcode }}</p>
            <h2 style="background-color: blue; color: white; padding: 10px; border-radius: 5px;">{{ $class->name }}</h2>
            <p style="color: #000;"><strong>Time:</strong> {{ $class->time }}</p>
            <p style="color: #000;"><strong>Duration:</strong> {{ $class->duration }} minutes</p>
            <p style="color: #000;"><strong>Capacity:</strong> {{ $class->capacity }}</p>
            <p style="color: #000;"><strong>Trainer:</strong> {{ $class->trainer->name }}</p> <!-- Assuming trainer relationship -->
            <p style="color: #000;">{{ $class->description }}</p>
            <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-primary" style="background-color: blue; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Edit</a>
            <form action="{{ route('classes.destroy', $class->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" style="background-color: red; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Delete</button>
            </form>
        </div>
        @endforeach
    </div>

    <!-- Center and adjust the Add Class button -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="{{ route('classes.create') }}" class="btn btn-success" style="background-color: green; color: white; padding: 10px 20px; font-size: 18px; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Add Class</a>
    </div>
</div>
@endsection
