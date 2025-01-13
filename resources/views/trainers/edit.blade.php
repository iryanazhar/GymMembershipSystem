@extends('master.layout')

@section('content')
<div class="container">
    <h1>{{ isset($trainer) ? 'Edit Trainer' : 'Add Trainer' }}</h1>

    <form action="{{ isset($trainer) ? route('trainers.update', $trainer) : route('trainers.store') }}" method="POST">
        @csrf
        @if(isset($trainer))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" value="{{ $trainer->name ?? old('name') }}" required>
        </div>
        <div class="form-group">
            <label for="expertise">Expertise</label>
            <input type="text" id="expertise" name="expertise" class="form-control" value="{{ $trainer->expertise ?? old('expertise') }}" required>
        </div>


        <button type="submit" class="btn btn-success">{{ isset($trainer) ? 'Update' : 'Create' }}</button>
    </form>
</div>
@endsection
