@extends('layout.app')
@extends('layout.LinkScript')
@section('title', 'TheraFlex')

@section('header')
@parent
@stop

@section('content')

<div class="relative bg-center bg-cover" style="background-image: url('images/employeebg.jpg'); height: 100vh;">

    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-5 mt-16 bg-white shadow-xl rounded-xl">
            <h1 class="mb-6 text-4xl font-bold text-center text-black">Add Employee</h1>


            <div class="relative flex justify-center mx-auto my-4">
                <label for="profile-pic">
                    <img class="w-32 h-32 rounded-full" src="https://via.placeholder.com/128" alt="Profile Picture Placeholder">
                    <span class="block text-sm font-medium text-gray-700">
                        Upload Photo
                    </span>
                </label>
                <input type="file" id="profile-pic" name="profile_pic" accept="image/jpeg, image/png" class="hidden">
            </div>


            <form method="POST" action="/add-employee">


                <!-- First Name -->
                <div class="mb-4">
                    <label for="fname" class="block mb-2 text-sm font-bold text-gray-700">First Name</label>
                    <input type="text" id="fname" name="fname" placeholder="John" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>

                <!-- Last Name -->
                <div class="mb-4">
                    <label for="lname" class="block mb-2 text-sm font-bold text-gray-700">Last Name</label>
                    <input type="text" id="lname" name="lname" placeholder="Doe" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>

                <!-- Phone Number -->
                <div class="mb-4">
                    <label for="phone-num" class="block mb-2 text-sm font-bold text-gray-700">Phone
                        Number</label>
                    <input type="tel" id="phone-num" name="phone_num" placeholder="+1234567890" pattern="[+]{1}[0-9]{11,14}" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>

                <!-- Address -->
                <div class="mb-4">
                    <label for="address" class="block mb-2 text-sm font-bold text-gray-700">Address</label>
                    <input type="text" id="address" name="address" placeholder="1234 Main St" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>

                <!-- Username -->
                <div class="mb-4">
                    <label for="username" class="block mb-2 text-sm font-bold text-gray-700">Username</label>
                    <input type="text" id="username" name="username" placeholder="johndoe123" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>

                <!-- Password -->
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-bold text-gray-700">Password</label>
                    <input type="password" id="password" name="password" placeholder="••••••••" required class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700 focus:outline-none focus:shadow-outline">
                    Add Employee
                </button>
            </form>
        </div>
    </div>
</div>

@if(isset($employeeData))
<div class="mt-16">
    <h2 class="mb-4 text-2xl font-bold">Employee Information</h2>
    <table class="w-full border border-collapse border-gray-400">
        <thead>
            <tr>
                <th class="px-4 py-2 border border-gray-400">First Name</th>
                <th class="px-4 py-2 border border-gray-400">Last Name</th>
                <th class="px-4 py-2 border border-gray-400">Phone Number</th>
                <th class="px-4 py-2 border border-gray-400">Address</th>
                <th class="px-4 py-2 border border-gray-400">Username</th>
                <th class="px-4 py-2 border border-gray-400">Password</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="px-4 py-2 border border-gray-400">{{$employeeData['fname']}}</td>
                <td class="px-4 py-2 border border-gray-400">{{$employeeData['lname']}}</td>
                <td class="px-4 py-2 border border-gray-400">{{$employeeData['phone_num']}}</td>
                <td class="px-4 py-2 border border-gray-400">{{$employeeData['address']}}</td>
                <td class="px-4 py-2 border border-gray-400">{{$employeeData['username']}}</td>
                <td class="px-4 py-2 border border-gray-400">{{$employeeData['password']}}</td>
            </tr>
        </tbody>
    </table>
</div>
@endif

@stop