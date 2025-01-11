@extends('classes.layout')

@section('content')
<h1>Edit Class</h1>
<form action="{{ route('classes.update', $class->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="classcode" value="{{ $class->classcode }}" required> <!-- Class Code -->
    <input type="text" name="name" value="{{ $class->name }}" required> <!-- Class Name -->
    <input type="time" name="time" value="{{ $class->time }}" required> <!-- Time -->
    <input type="number" name="duration" value="{{ $class->duration }}" required> <!-- Duration -->
    <input type="number" name="capacity" value="{{ $class->capacity }}" required> <!-- Capacity -->
    <select name="trainer_id" required> <!-- Trainer selection dropdown -->
        @foreach($trainers as $trainer) <!-- Assuming $trainers is passed to the view -->
        <option value="{{ $trainer->id }}" {{ $trainer->id == $class->trainer_id ? 'selected' : '' }}>
            {{ $trainer->name }}
        </option>
        @endforeach
    </select>
    <textarea name="description">{{ $class->description }}</textarea> <!-- Description -->
    <button type="submit">Update</button>
</form>
@endsection
