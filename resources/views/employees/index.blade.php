    {{-- <!-- resources/views/managers/index.blade.php -->
    @vite(['../../css/admin.css','../../js/admin.js'])
    @extends( 'layouts.adminSidebar')

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Employee List</title>
        <!-- Include Bootstrap CSS link -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container mt-5">
        <h2>Employee List</h2>
        <a href="{{ route('employees.create') }}" class="mb-3 btn btn-success">Add Employee</a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table">
            <thead>
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
                @foreach($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->fname }}</td>
                        <td>{{ $employee->lname }}</td>
                        <td>{{ $employee->phoneNum }}</td>
                        <td>{{ $employee->address }}</td>
                        <td>{{ $employee->username }}</td>
                        <td>

                            @if($employee->images)
                            <img src="{{ asset('profiles/' . $employee->images) }}" alt="Profile Image" style="max-width: 50px;">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('employees.delete', $employee->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                                <a href="{{ route('payrolls.index', $employee->id) }}" class="btn btn-primary">Payrolls</a>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>
    </html> --}}


@extends('layouts.app')
@extends('layouts.LinkScript')
@section('title', 'TheraFlex')
{{-- @extends('layouts.LinkScript') --}}
@extends( 'layouts.adminSidebar')

@section('header')

@stop


@section('content')



<div class="flex flex-col items-center justify-center min-h-screen" style="background: linear-gradient(180deg, rgba(180, 198, 198, 0.97), rgba(81, 183, 79));">
<div>
<div class="mt-4 ml-4 text-4xl font-bold text-black">Employees Information</div>
</div>

    <!-- Text "Employees Information" -->
    <div class="flex justify-start w-4/5">
  
    </div>
    <div class="flex items-center justify-between w-4/5">
        {{-- <div class="mt-4 ml-4 text-4xl font-bold text-black">Services</div> --}}
        <a href="{{ route('employees.create') }}" class="justify-end px-3 py-1 mb-3 text-white bg-green-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-green-600">Add Employee</a>

    </div>
    <!-- Beautified Table -->
    <div class="w-4/5 p-5 m-2 bg-white bg-opacity-50 shadow-xl rounded-xl">
    <div class="overflow-x-auto">
        <table class="w-full border border-black table-auto">
            <thead>
                <tr class="text-white bg-gray-700">
                    <th class="px-4 py-2 border">ID</th>
                    <th class="px-4 py-2 border">First Name</th>
                    <th class="px-4 py-2 border">Last Name</th>
                    <th class="px-4 py-2 border">Phone Number</th>
                    <th class="px-4 py-2 border">Address</th>
                    <th class="px-4 py-2 border">Username</th>
                    <th class="px-4 py-2 border">Profile Pic</th>
                    <th class="px-4 py-2 border">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employees as $employee)
                <tr>
                    <td class="px-4 py-2 border">{{ $employee->id }}</td>
                    <td class="px-4 py-2 border">{{ $employee->fname }}</td>
                    <td class="px-4 py-2 border">{{ $employee->lname }}</td>
                    <td class="px-4 py-2 border">{{ $employee->phoneNum }}</td>
                    <td class="px-4 py-2 border">{{ $employee->address }}</td>
                    <td class="px-4 py-2 border">{{ $employee->username }}</td>
                    <td class="px-4 py-2 border">
                        @if($employee->images)
                            <img src="{{ asset('profiles/' . $employee->images) }}" alt="Profile Image" style="max-width: 50px;" class="w-20 h-20 ml-20">
                        @else
                            No Image
                        @endif
                    </td>
                    <td class="flex items-center justify-end h-16 px-4 py-2 mt-5 ml-auto mr-40">
                 <a href="{{ route('employees.edit', $employee->id) }}" class="px-5 py-1 text-white bg-green-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-green-600">Edit</a>
                 <form action="{{ route('employees.delete', $employee->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                        @method('DELETE')
                         <button type="submit" class="px-3 py-1 ml-2 text-white bg-red-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-red-600">Delete</button>
                        </form>
                             <a href="{{ route('payrolls.index', $employee->id) }}" class="px-3 py-1 ml-2 text-white bg-blue-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-blue-600">Payrolls</a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection

