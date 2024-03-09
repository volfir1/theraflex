@extends('layout.app')
@extends('layout.LinkScript')
@section('title', 'TheraFlex')

@section('header')
@parent
@stop

@section('content')
<div class="relative bg-center bg-cover" style="background-image: url('images/springfields.jpeg'); height: 100vh;">

    <!-- Dim effect -->
    <div class="absolute inset-0 bg-black opacity-50 blur-"></div>

    <div class="relative z-10 flex flex-col items-start justify-between">

        <div class="pb-8 ml-20 mt-52">
            <h1 class="text-4xl font-bold text-white">Add Service</h1>
            <button class="px-4 py-2 mt-4 text-white bg-green-500 rounded-md hover:bg-green-600 focus:outline-none focus:shadow-outline">
                Submit
            </button>
        </div>

    </div>

    <!-- Product Description Section -->
    <div class="absolute z-20 flex flex-col w-2/5 py-4 ml-20 bg-white shadow-xl rounded-xl relevant mt-">
        <h2 class="mb-4 ml-5 text-xl font-semibold text-black">Service Basic Information</h2>
        <form action="#" class="">
        <div class="flex flex-col">
    <h1 class="mt-2 ml-5 text-black from-neutral-500">Product Type</h1>
    <select class="h-10 pl-4 mt-2 ml-5 text-black bg-gray-100 shadow-2xl w-90 focus:outline-none w-38 rounded-xl focus:border-green-500 relevant">
        <!-- Add your dropdown options here -->
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select>
</div>

        </form>
    </div>

    <!-- Quantity and Price section -->
    <div class="relative flex mt-4 px-96 mr-96">
        <!-- Quantity Container -->
        <div class="flex flex-col p-3 ml-auto bg-gray-500 rounded-lg">
        <h1 class="mt-2 ml-5 text-black from-neutral-500">Service Type</h1>
    <select class="h-10 pl-4 mt-2 ml-5 text-black bg-gray-100 shadow-2xl w-90 focus:outline-none w-38 rounded-xl focus:border-green-500 relevant">
        <!-- Add your dropdown options here -->
        <option value="option1">Option 1</option>
        <option value="option2">Option 2</option>
        <option value="option3">Option 3</option>
    </select>
        </div>
    </div>

    <!-- Image Container -->
    <div class="relative flex-col w-2/5 h-48 ml-auto bg-gray-400 shadow-xl relativeflex mr-60 rounded-xl">
    <h1 class="mt-5 ml-5 text-xl text-black">Discounted Price</h1>

    <!-- Text input for discounted price -->
    <input type="text" placeholder="Type Here" class="px-4 py-2 mt-5 ml-5 text-black bg-gray-100 rounded-md shadow-2xl w-60 focus:outline-none focus:border-green-500">

    <!-- Text for discounted price -->
    <div class="mt-4 ml-5">
        <span class="text-gray-500">Enter the discounted price here</span>
    </div>
</div>

@endsection
