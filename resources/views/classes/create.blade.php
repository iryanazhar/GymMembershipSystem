@extends('classes.layout')

@section('content')
<div style="background-image: url('{{ asset('img/hero/classbg.jpg') }}'); background-size: cover; background-position: center; padding: 70px 20px; min-height: 100vh;">
    <!-- Add Class Title -->
    <div style="background-color: black; color: #ff1493; text-shadow: 0 0 20px #ff1493; text-align: center; padding: 20px; font-size: 24px; font-weight: bold; border-radius: 8px; margin-bottom: 30px; margin-top: 50px;">
        Add Class
    </div>

    <!-- Add Class Form -->
    <div class="container" style="margin-top: 50px;">
        <form action="{{ route('classes.store') }}" method="POST" style="background: black; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px blue; width: 50%; margin: auto;">
            @csrf

            <div class="mb-3">
                <label for="classcode" style="color: blue; text-shadow: 0 0 5px blue;"><strong>Class Code</strong></label>
                <input type="text" id="classcode" name="classcode" placeholder="Class Code" required class="form-control" style="background-color: black; color: blue; padding: 10px; border-radius: 8px; border: 1px solid blue; box-shadow: 0 0 5px blue;">
            </div>

            <div class="mb-3">
                <label for="name" style="color: blue; text-shadow: 0 0 5px blue;"><strong>Class Name</strong></label>
                <input type="text" id="name" name="name" placeholder="Class Name" required class="form-control" style="background-color: black; color: blue; padding: 10px; border-radius: 8px; border: 1px solid blue; box-shadow: 0 0 5px blue;">
            </div>

            <div class="mb-3">
                <label for="time" style="color: blue; text-shadow: 0 0 5px blue;"><strong>Time</strong></label>
                <input type="time" id="time" name="time" placeholder="Time" required class="form-control" style="background-color: black; color: blue; padding: 10px; border-radius: 8px; border: 1px solid blue; box-shadow: 0 0 5px blue;">
            </div>

            <div class="mb-3">
                <label for="duration" style="color: blue; text-shadow: 0 0 5px blue;"><strong>Duration (in minutes)</strong></label>
                <input type="number" id="duration" name="duration" placeholder="Duration (in minutes)" required class="form-control" style="background-color: black; color: blue; padding: 10px; border-radius: 8px; border: 1px solid blue; box-shadow: 0 0 5px blue;">
            </div>

            <div class="mb-3">
                <label for="capacity" style="color: blue; text-shadow: 0 0 5px blue;"><strong>Capacity</strong></label>
                <input type="number" id="capacity" name="capacity" placeholder="Capacity" required class="form-control" style="background-color: black; color: blue; padding: 10px; border-radius: 8px; border: 1px solid blue; box-shadow: 0 0 5px blue;">
            </div>

            <div class="mb-3">
                <label for="trainer_id" style="color: blue; text-shadow: 0 0 5px blue;"><strong>Trainer</strong></label>
                <select id="trainer_id" name="trainer_id" required class="form-control" style="background-color: black; color: blue; padding: 10px; border-radius: 8px; border: 1px solid blue; box-shadow: 0 0 5px blue;">
                    <option value="" disabled selected>Select Trainer</option>
                    @foreach($trainers as $trainer)
                    <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="description" style="color: blue; text-shadow: 0 0 5px blue;"><strong>Description</strong></label>
                <textarea id="description" name="description" placeholder="Description" class="form-control" style="background-color: black; color: blue; padding: 10px; border-radius: 8px; border: 1px solid blue; box-shadow: 0 0 5px blue;"></textarea>
            </div>

            <div style="text-align: center;">
                <button type="submit" class="btn btn-primary" style="background-color: blue; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif; padding: 10px 20px; border-radius: 8px;">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
