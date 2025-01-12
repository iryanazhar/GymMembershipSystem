@extends('master.layout')

@section('content')
<div style="background-image: url('img/hero/hero-2.jpg'); background-size: cover; background-position: center; padding: 70px 20px; min-height: 100vh;">
    <!-- Heading -->
    <h1 style="text-align: center; color: white; margin-bottom: 50px; padding-top: 20px;">List of Members</h1>

    <!-- Cards Container -->
    <div class="container">
        <a href="{{ route('members.create') }}" class="btn btn-success mb-3" style="background-color: green; color: white; padding: 10px 20px; font-size: 18px; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Add New Member</a>

        <div class="row">
            <div class="mb-3">
                <input type="text" id="searchInput" class="form-control" placeholder="Search Members..." onkeyup="searchMembers()">
            </div>
            <table class="table table-bordered" style="background-color: rgba(255, 255, 255, 0.8);">
                <thead>
                    <tr>
                        <th style="text-align: center;">Member Name</th>
                        <th style="text-align: center;">Member ID</th>
                        <th style="text-align: center;">Phone Number</th>
                        <th style="text-align: center;">Package</th>
                        <th style="text-align: center;">Gender</th>
                        <th style="text-align: center;">Join Date</th>
                        <th style="text-align: center;">Status</th>
                        <th style="text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                        <td style="text-align: center;">{{ $member->name }}</td>
                        <td style="text-align: center;">{{ $member->id }}</td>
                        <td style="text-align: center;">{{ $member->contact_information }}</td>
                        <td style="text-align: center;">{{ $member->membership_package_id ?? 'N/A' }}</td>
                        <td style="text-align: center;">{{ ucfirst($member->gender) }}</td>
                        <td style="text-align: center;">{{ $member->join_date }}</td>
                        <td style="text-align: center;">{{ ucfirst($member->status) }}</td>
                        <td style="text-align: center;">
                            <!-- Edit Button -->
                            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary" style="background-color: blue; color: white; font-weight: bold; font-size: 14px;">Edit</a>
                            <!-- Delete Button with confirmation -->
                            <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;"onsubmit="return confirm('Are you sure you want to delete this member?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="background-color: red; color: white; font-weight: bold; font-size: 14px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


            <script>
                function searchMembers() {
                    const input = document.getElementById('searchInput');
                    const filter = input.value.toLowerCase();
                    const table = document.querySelector('.table');
                    const rows = table.getElementsByTagName('tr');

                    for (let i = 1; i < rows.length; i++) { // Start from 1 to skip the header row
                        const cells = rows[i].getElementsByTagName('td');
                        let rowContainsSearchTerm = false;

                        for (let j = 0; j < cells.length; j++) {
                            if (cells[j]) {
                                const cellText = cells[j].textContent || cells[j].innerText;
                                if (cellText.toLowerCase().indexOf(filter) > -1) {
                                    rowContainsSearchTerm = true;
                                    break;
                                }
                            }
                        }

                        rows[i].style.display = rowContainsSearchTerm ? "" : "none"; // Show or hide the row
                    }
                }
            </script>
            {{-- @foreach($members as $member)
            <div class="col-md-4 mb-4"> <!-- Adjust the column size (col-md-4) for 3 cards per row -->
                <div class="card" style="background-color: rgba(255, 255, 255, 0.8); padding: 20px; border-radius: 8px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
                    <!-- Card Body -->
                    <div class="card-body">
                        <h5 class="card-title" style="background-color: #81D8D0; color: white; padding: 10px; border-radius: 5px; font-size: 20px; text-align: center;">{{ $member->name }}</h5>
                        <p class="card-text" style="color: #000;"><strong>Member ID:</strong> {{ $member->id }}</p>
                        <p class="card-text" style="color: #000;"><strong>Phone Number:</strong> {{ $member->contact_information }}</p>
                        <p class="card-text" style="color: #000;"><strong>Package ID:</strong> {{ $member->membership_package_id ?? 'N/A' }}</p>
                        <p class="card-text" style="color: #000;"><strong>Gender:</strong> {{ ucfirst($member->gender) }}</p>
                        <p class="card-text" style="color: #000;"><strong>Join Date:</strong> {{ $member->join_date }}</p>
                        <p class="card-text" style="color: #000;"><strong>Status:</strong> {{ ucfirst($member->status) }}</p>

                        <!-- Action Buttons -->
                        <div class="d-flex justify-content-between">
                            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary" style="background-color: blue; color: white; font-weight: bold; font-size: 14px;">Edit</a>

                            <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="background-color: red; color: white; font-weight: bold; font-size: 14px;">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}
        </div>
    </div>
</div>
@endsection
