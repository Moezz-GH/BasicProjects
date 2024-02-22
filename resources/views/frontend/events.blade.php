@extends('frontend.master_dashboard')

@section('title')
    OasisQuest - Reservations
@endsection

@section('main')

    <div class="container  py-8 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Event Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mx-10">
                <img src="{{asset('frontend/assets/freefall1.jpg')}}" alt="Skydiving Event" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Soar High: Skydiving Adventure Day!</h3>
                    <p class="text-gray-600 mb-2">Date: 24/Feb/2024</p>
                    <p class="text-gray-600 mb-2">Time: 10:00 AM</p>
                    <p class="text-gray-600 mb-2">Location: Gharyan</p>
                    <div class="mt-5 relative flex justify-between items-center">
                        <a href="details" class="w-svw justify-center align-middle text-center  bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600">Details</a>
                    </div>
                </div>
            </div>

            <!-- Event Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mx-10">
                <img src="{{asset('frontend/assets/freefall3.jpg')}}" alt="Skydiving Event" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Soar High: Skydiving Adventure Day!</h3>
                    <p class="text-gray-600 mb-2">Date: 20/Mar/2024</p>
                    <p class="text-gray-600 mb-2">Time: 4:00 PM</p>
                    <p class="text-gray-600 mb-2">Location: Gharyan</p>
                    <div class="mt-5 relative flex justify-between items-center">
                        <a href="#" class="w-svw justify-center align-middle text-center  bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600">Details</a>
                    </div>
                </div>
            </div>

            <!-- Event Card -->
            <div class="bg-white shadow-lg rounded-lg overflow-hidden mx-10">
                <img src="{{asset('frontend/assets/freefall2.jpg')}}" alt="Skydiving Event" class="w-full h-64 object-cover">
                <div class="p-6">
                    <h3 class="font-semibold text-lg text-gray-800 mb-2">Soar High: Skydiving Adventure Day!</h3>
                    <p class="text-gray-600 mb-2">Date: 20/Jun/2024</p>
                    <p class="text-gray-600 mb-2">Time: 5:00 PM</p>
                    <p class="text-gray-600 mb-2">Location: Gharyan</p>
                    <div class="mt-5 relative flex justify-between items-center">
                        <a href="#" class="w-svw justify-center align-middle text-center  bg-green-500 text-white px-4 py-2 rounded-full hover:bg-green-600">Details</a>
                    </div>
                </div>
            </div>


@endsection
