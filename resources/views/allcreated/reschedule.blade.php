@extends('layout.app')
@extends('layout.LinkScript')
@section('title', 'TheraFlex')

@section('header')
@parent
@endsection

@section('content')

<div class="absolute flex items-center justify-center py-40 px-80">



    <div class="text-center px-80">
        <p class="px-40 text-2xl font-semibold">Reschedule Appointments</p>
    </div>
</div>


<div class="flex items-center justify-center py-40">
    <div class="w-6/12 pr-10 mt-20 bg-white shadow-2xl pb-14 rounded-xl">
        <h1 class="pt-10 pl-10 mb-5 text-2xl font-bold">Appointment Information</h1>
        <p class="pl-10 mb-5">"Welcome! We appreciate your initiative to reschedule your appointment. Let's find the perfect time for you. How can we assist you today?"</p>

        <form class="pl-10 pr-10">

            <div class="flex mb-6">
                <label for="appointmentDetails" class="block text-lg font-medium text-gray-700">Appointment Details</label>
                <div class="flex w-full p-2 mt-1 border-none rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
                    <div class="flex-grow">
                        <p class="font-bold ">Service:</p>
                        <p class="px-5">Extra Service</p>
                        <p class="font-bold">Product:</p>
                        <p class="px-5">Lubricant</p>
                        <p class="font-bold">Combo:</p>
                        <p class="px-5">None</p>
                    </div>
                    <div class="flex-shrink mr-20"> <!-- Adjust the margin as needed -->
                        <p class="font-bold">Subtotal:</p>
                        <p class="px-5">₱890</p>
                        <p class="font-bold">Original Date and Time:</p>
                        <p class="px-5">03/16/2024 </p>
                    </div>
                </div>
            </div>







            <!-- Date and Time Picker -->
            <div class="flex items-center mb-6">
                <label for="appointmentDateTime" class="block pr-2 text-sm font-medium text-gray-700">Reschedule Select Date & Time:</label>
                <input type="datetime-local" id="appointmentDateTime" name="appointmentDateTime" class="p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Submit button -->
            <div class="flex flex-row items-center justify-center">
                <button class="w-32 h-12 px-4 py-2 text-xl font-thin text-white rounded-xl bg-customcolor3 hover:bg-customcolor2">
                    Resched
                </button>
                <a href="/profile" class="w-32 h-12 px-4 py-2 ml-4 text-xl font-thin text-center text-white bg-red-500 rounded-xl hover:bg-red-400">
                    Cancel
                </a>
            </div>


        </form>
    </div>
</div>




<div class="flex justify-center ">

</div>
</div>


</div>
@stop