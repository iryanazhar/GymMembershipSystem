@extends('classes.layout')

@section('content')
<h1>Add Class</h1>
<form action="{{ route('classes.store') }}" method="POST">
    @csrf
    <input type="text" name="classcode" placeholder="Class Code" required>
    <input type="text" name="name" placeholder="Class Name" required>
    <input type="time" name="time" placeholder="Time" required>
    <input type="number" name="duration" placeholder="Duration (in minutes)" required>
    <input type="number" name="capacity" placeholder="Capacity" required>
    <select name="trainer_id" required> <!-- Assuming trainer is related via foreign key -->
        <option value="" disabled selected>Select Trainer</option>
        @foreach($trainers as $trainer) <!-- Assuming $trainers is passed to the view -->
        <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
        @endforeach
    </select>
    <textarea name="description" placeholder="Description"></textarea>
    <button type="submit">Save</button>
</form>
@endsection
