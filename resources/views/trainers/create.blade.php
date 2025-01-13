@extends('trainers.layout')

@section('content')
<div class="container">
    <h1>Add Trainer</h1>
    <form action="{{ route('trainers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="expertise">Expertise</label>
            <input type="text" name="expertise" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="availability">Availability</label>
            <input type="text" name="availability" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
@endsection
