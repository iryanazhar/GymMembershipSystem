@extends('master.layout')

@section('content')

<!-- Table container for displaying members -->
<div class="container mt-5">
    <h2 class="mb-4">Members List</h2>
    <!-- Button to add a new member -->
    <a href="{{ route('members.create') }}" class="btn btn-success mb-3">Add New Member</a>

    <!-- Display success message if a member is successfully added -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Table to list the members -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Member ID</th>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Membership Package ID</th>
                <th>Gender</th>
                <th>Join Date</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($members as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->contact_information }}</td>
                    <td>{{ $member->membership_package_id ?? 'N/A' }}</td>
                    {{-- In the future, when the package relation is ready, this will be used --}}
                    <td>{{ ucfirst($member->gender) }}</td>
                    <td>{{ $member->join_date }}</td>
                    <td>{{ ucfirst($member->status) }}</td>
                    <td>
                        <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('members.destroy', $member->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <!-- Display message when there are no members -->
                <tr>
                    <td colspan="8" class="text-center">No members found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
