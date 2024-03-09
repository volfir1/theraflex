@extends('layout.app')
@extends('layout.LinkScript')
@section('title', 'TheraFlex')

@section('header')
@parent
@stop

@section('content')
<div class="absolute flex items-center justify-center px-56 pt-40">
    <h1 class="text-3xl ">Ready to make an appointment?</h1>
</div>


<div class="object-left ">

    <div class="flex flex-row items-center justify-start h-screen pt-20 pl-56 bg-gray-200">
        <!--card1-->
        <div class="w-3/12 p-10 mb-4 mr-10 bg-white rounded-lg shadow-md h-3/6">
            <!-- Icon Holder -->
            <div class="flex items-center justify-center mb-4">
                <div class="p-4 text-white rounded-full">
                    <!-- Placeholder SVG -->
                    <img src="{{ asset('icons/menubook.svg') }}" alt="Icon" class="w-20 h-20" style="fill: blue;"> <!-- Change 'blue' to your desired color -->
                </div>
            </div>

            <!-- Phrase -->
            <div class="px-4 mb-4 text-center "> <!-- Added px-4 for left and right padding -->
                <p class="text-xl ">Select the products and <br>services that appeal to you.</p>
            </div>

            <!-- Button -->
            <div class="pt-16 pl-16 text-center py-28">
                <a href="/product" class="block w-56 px-3 py-2 pl-10 font-bold text-center text-white rounded-xl bg-customcolor3 hover:bg-customcolor2 text-decoration-none">
                    Products and Services
                </a>

            </div>
        </div>

        <!--card2-->
        <div class="w-3/12 p-10 mb-4 mr-10 bg-white shadow-md rounded-xl h-3/6">
            <!-- Icon Holder -->
            <div class="flex items-center justify-center mb-4">
                <div class="p-4 text-white rounded-full">
                    <!-- Placeholder SVG -->
                    <img src="{{ asset('icons/appointment.svg') }}" alt="Icon" class="w-20 h-20" style="fill: blue;"> <!-- Change 'blue' to your desired color -->
                </div>
            </div>

            <!-- Phrase -->
            <div class="px-4 mb-4 text-center "> <!-- Added px-4 for left and right padding -->
                <p class="text-xl ">Set and schedule your<br> appointment.</p>
            </div>
            <!--datetime pciker-->
            <div class="py-20 pt-10 text-center">
                <label for="appointmentDateTime" class="block mb-2 font-bold text-gray-700">Schedule Date and Time</label>
                <input type="datetime-local" id="appointmentDateTime" name="appointmentDateTime" class="px-4 py-2 font-bold text-black bg-white border border-green-500 rounded-xl">
            </div>




        </div>

        <!--card3-->
        <div class="w-3/12 p-10 mb-4 mr-10 bg-white rounded-lg shadow-md h-3/6">
            <!-- Icon Holder -->
            <div class="flex items-center justify-center mb-4">
                <div class="p-4 text-white rounded-full">
                    <!-- Placeholder SVG -->
                    <img src="{{ asset('icons/done.svg') }}" alt="Icon" class="w-20 h-20" style="fill: blue;"> <!-- Change 'blue' to your desired color -->
                </div>
            </div>

            <!-- Phrase -->
            <div class="px-4 mb-2 text-center "> <!-- Added px-4 for left and right padding -->
                <p class="text-xl ">Verify the details and go<br> schedule the <br> appointment.</p>
            </div>

            <!-- Button -->
            <div class="pt-10 mt-5 text-center py-28">
                <button class="px-4 py-2 font-bold text-white bg-customcolor3 hover:bg-customcolor2 rounded-xl">
                    Set Appointment
                </button>
            </div>
        </div>
    </div>
</div>


@endsection