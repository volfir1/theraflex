<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer List</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background-color: #28a745;">

<div class="container mt-5">
    <h2>Customer List</h2>
    <a href="{{ route('customers.create') }}" class="mb-3 btn btn-custom">Add Customer</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="container p-3" style="background-color: rgba(255, 255, 255, 0.5); border-radius: 10px;">
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Username</th>
                    <th>Profile Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->fname }}</td>
                        <td>{{ $customer->lname }}</td>
                        <td>{{ $customer->phoneNum }}</td>
                        <td>{{ $customer->address }}</td>
                        <td>{{ $customer->username }}</td>
                        <td>
                            @if($customer->images)
                                <img src="{{ asset('uploads/' . $customer->images) }}" alt="Profile Image" style="max-width: 50px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('customers.delete', $customer->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Add Bootstrap JS and Popper.js scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style>
    .btn-custom {
        background-color: #1c672dd6; /* Your desired button color */
        color: #fff; /* Text color */
    }
</style>

</body>
</html>
