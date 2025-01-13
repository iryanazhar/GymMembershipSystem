@extends('trainers.layout')

@section('content')
<div class="container">
    <h1>Trainers List</h1>
    <a href="{{ route('trainers.create') }}" class="btn btn-primary">Add Trainer</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Expertise</th>


            </tr>
        </thead>
        <tbody>
            @foreach($trainers as $trainer)
            <tr>
                <td>{{ $trainer->name }}</td>
                <td>{{ $trainer->expertise }}</td>

                <td>
                    <a href="{{ route('trainers.edit', $trainer) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('trainers.destroy', $trainer) }}" method="POST" style="display:inline;">
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
