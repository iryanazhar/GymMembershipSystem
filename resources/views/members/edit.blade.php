@extends('master.layout')

@section('content')
<div style="background-image: url('img/hero/hero-2.jpg'); background-size: cover; background-position: center; padding: 70px 20px; min-height: 100vh;">
    <!-- Heading -->
    <h1 style="text-align: center; color: white; margin-bottom: 50px; padding-top: 20px;">Edit Member</h1>

    <div class="container" style="max-width: 600px;">
        <!-- Form for Editing Member -->
        <form action="{{ route('members.update', $member->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- User ID (Read-Only as it can't be changed (PK)) -->
            <div class="form-group">
                <label for="id" style="color: white;">User ID</label>
                <input type="text" class="form-control" name="id" value="{{ old('id', $member->id) }}" readonly>
            </div>

            <!-- Name Input -->
            <div class="form-group">
                <label for="name" style="color: white;">Member Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name', $member->name) }}" required>
            </div>

            <!-- Contact Information Input -->
            <div class="form-group">
                <label for="contact_information" style="color: white;">Contact Information</label>
                <input type="text" class="form-control" name="contact_information" value="{{ old('contact_information', $member->contact_information) }}" required>
            </div>

            <!-- Gender Input -->
            <div class="form-group">
                <label for="gender" style="color: white;">Gender</label>
                <select class="form-control" name="gender" required>
                    <option value="male" {{ old('gender', $member->gender) == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender', $member->gender) == 'female' ? 'selected' : '' }}>Female</option>
                </select>
            </div>

            <!-- Membership Package ID Input -->
            <div class="form-group">
                <label for="membership_package_id" style="color: white;">Membership Package ID</label>
                <input type="text" class="form-control" name="membership_package_id" value="{{ old('membership_package_id', $member->membership_package_id) }}" required>
            </div>

            <!-- Join Date Input -->
            <div class="form-group">
                <label for="join_date" style="color: white;">Join Date</label>
                <input type="date" class="form-control" name="join_date" value="{{ old('join_date', $member->join_date) }}" required>
            </div>

            <!-- Status Input -->
            <div class="form-group">
                <label for="status" style="color: white;">Status</label>
                <select class="form-control" name="status" required>
                    <option value="active" {{ old('status', $member->status) == 'active' ? 'selected' : '' }}>Active</option>
                    <option value="inactive" {{ old('status', $member->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                </select>
            </div>

            <!-- Submit Button -->
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary" style="background-color: blue; color: white; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Update Member</button>
            </div>
        </form>
    </div>
</div>
@endsection
