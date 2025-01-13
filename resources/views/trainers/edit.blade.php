@extends('trainers.layout')

@section('content')
<div class="container">
    <h1>Edit Trainer</h1>
    <form action="{{ route('trainers.update', $trainer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $trainer->name }}" required>
        </div>
        <div class="form-group">
            <label for="expertise">Expertise</label>
            <input type="text" name="expertise" class="form-control" value="{{ $trainer->expertise }}" required>
        </div>
        <div class="form-group">
            <label for="availability">Availability</label>
            <input type="text" name="availability" class="form-control" value="{{ $trainer->availability }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
