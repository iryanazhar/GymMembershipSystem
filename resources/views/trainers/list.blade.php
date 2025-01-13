@extends('trainers.layout')
@section('content')

<div class="container">
    <h1>List of Trainers</h1>
    <a href="{{ route('trainers.create') }}" class="btn btn-success">Add Trainer</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Expertise</th>
                <th>Availability</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($trainers as $trainer)
            <tr>
                <td>{{ $trainer->name }}</td>
                <td>{{ $trainer->expertise }}</td>
                <td>{{ $trainer->availability }}</td>
                <td>
                    <a href="{{ route('trainers.edit', $trainer->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('trainers.destroy', $trainer->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
