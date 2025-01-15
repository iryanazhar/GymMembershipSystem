@extends('master.layout')

@section('content')
<div style="background-image: url('img/hero/hero-2.jpg'); background-size: cover; background-position: center; padding: 100px 20px 70px; min-height: 100vh;">
    <!-- Heading -->
    <h1 style="text-align: center; color: white; margin-bottom: 30px; padding-top: 70px;">List of Trainers</h1>

    <!-- Container -->
    <div class="container" style="margin-top: 50px;">
        <!-- Add New Trainer Button -->
        <div style="text-align: center; margin-bottom: 20px;">
            <a href="{{ route('trainers.create') }}" class="btn btn-success" style="background-color: #28a745; color: white; padding: 10px 20px; font-size: 18px; font-weight: bold; font-family: 'Arial Black', Gadget, sans-serif;">Add New Trainer</a>
        </div>

        <!-- Search Input -->
        <div class="mb-3 d-flex justify-content-center">
            <input type="text" id="searchInput" class="form-control" placeholder="Search Trainers..." onkeyup="searchTrainers()" style="background-color: white; color: black; font-family: 'Arial', sans-serif; font-size: 16px; padding: 10px; border-radius: 8px; border: 1px solid #ccc; box-shadow: 0 0 5px #007bff; width: 50%;">
        </div>

        <!-- Trainers Table -->
        <div class="row d-flex justify-content-center">
            <table class="table table-bordered" style="background-color: rgba(255, 255, 255, 0.8); margin-bottom: 70px; width: 80%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                <thead>
                    <tr>
                        <th style="text-align: center;">Trainer Name</th>
                        <th style="text-align: center;">Expertise</th>
                        <th style="text-align: center;">Availability</th>
                        <th style="text-align: center;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($trainers as $trainer)
                    <tr>
                        <td style="text-align: center;">{{ $trainer->name }}</td>
                        <td style="text-align: center;">{{ $trainer->expertise }}</td>
                        <td style="text-align: center;">{{ $trainer->availability }}</td>
                        <td style="text-align: center;">
                            <!-- Edit Button -->
                            <a href="{{ route('trainers.edit', $trainer->id) }}" class="btn btn-primary" style="background-color: #007bff; color: white; font-weight: bold; font-size: 14px;">Edit</a>
                            <!-- Delete Button with confirmation -->
                            <form action="{{ route('trainers.destroy', $trainer->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this trainer?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" style="background-color: #dc3545; color: white; font-weight: bold; font-size: 14px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function searchTrainers() {
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
@endsection
