@extends('classes.layout')

@section('content')
<div style="background-image: url('img/hero/class_bg.jpeg'); background-size: cover; background-position: center; padding: 70px 20px; min-height: 100vh;">
    <!-- Edit Class Title -->
    <h1 style="text-align: center; color: rgb(0, 0, 0); margin-bottom: 50px; padding-top: 20px;">Edit Class</h1>

    <!-- Edit Class Form -->
    <div class="container" style="margin-top: 50px;">
        <form action="{{ route('classes.update', $class->id) }}" method="POST" style="background: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); width: 50%; margin: auto;">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="classcode" style="color: #000; font-weight: bold;"><strong>Class Code</strong></label>
                <input type="text" id="classcode" name="classcode" class="form-control" value="{{ $class->classcode }}" required style="background-color: #81D8D0; color: rgb(0, 0, 0); padding: 10px; border-radius: 8px; border: none;">
            </div>

            <div class="mb-3">
                <label for="name" style="color: #000; font-weight: bold;"><strong>Class Name</strong></label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $class->name }}" required style="background-color: #81D8D0; color: rgb(0, 0, 0); padding: 10px; border-radius: 8px; border: none;">
            </div>

            <div class="mb-3">
                <label for="time" style="color: #000; font-weight: bold;"><strong>Time</strong></label>
                <input type="time" id="time" name="time" class="form-control" value="{{ $class->time }}" required style="background-color: #81D8D0; color: rgb(0, 0, 0); padding: 10px; border-radius: 8px; border: none;">
            </div>

            <div class="mb-3">
                <label for="duration" style="color: #000; font-weight: bold;"><strong>Duration (in minutes)</strong></label>
                <input type="number" id="duration" name="duration" class="form-control" value="{{ $class->duration }}" required style="background-color: #81D8D0; color: rgb(0, 0, 0); padding: 10px; border-radius: 8px; border: none;">
            </div>

            <div class="mb-3">
                <label for="capacity" style="color: #000; font-weight: bold;"><strong>Capacity</strong></label>
                <input type="number" id="capacity" name="capacity" class="form-control" value="{{ $class->capacity }}" required style="background-color: #81D8D0; color: rgb(0, 0, 0); padding: 10px; border-radius: 8px; border: none;">
            </div>

            <div class="mb-3">
                <label for="trainer_id" style="color: #000; font-weight: bold;"><strong>Trainer</strong></label>
                <select id="trainer_id" name="trainer_id" required class="form-control" style="background-color: #81D8D0; color: rgb(0, 0, 0); padding: 10px; border-radius: 8px; border: none;">
                    <option value="" disabled>Select Trainer</option>
                    @foreach($trainers as $trainer)
                    <option value="{{ $trainer->id }}" {{ $class->trainer_id == $trainer->id ? 'selected' : '' }}>{{ $trainer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="description" style="color: #000; font-weight: bold;"><strong>Description</strong></label>
                <textarea id="description" name="description" class="form-control" style="background-color: #81D8D0; color: rgb(0, 0, 0); padding: 10px; border-radius: 8px; border: none;">{{ $class->description }}</textarea>
            </div>

            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary" style="background-color: green; color: white; padding: 10px 20px; font-size: 18px; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
