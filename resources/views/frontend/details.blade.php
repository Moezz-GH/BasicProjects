@extends('frontend.master_dashboard')

@section('title')
    OasisQuest - Reservations
@endsection

@section('main')


    <div class="container mx-auto py-8 ">
        <div class="max-w-4xl mx-auto">
            <!-- Event Header -->
            <div class="bg-transparent text-black p-4 rounded-t-lg mb-4">
                <h1 class="text-3xl font-bold">Skydiving Adventure Day</h1>
                <br>
                <p class="text-sm">Date: 24/Feb/2024 | Time: 10:00 AM | Location: Gharyan</p>
            </div>

            <!-- Event Image -->
            <img src="{{asset('frontend/assets/freefall1.jpg')}}" alt="Skydiving Event" class="w-full h-auto rounded-xl mb-6">

            <!-- Event Details -->
            <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                <h2 class="text-xl font-semibold mb-4">Event Details</h2>
                <p class="text-gray-700 mb-4">Experience the thrill of skydiving and create memories that last a lifetime! Whether you're a seasoned thrill-seeker or a first-time jumper, this event promises an unforgettable adventure.</p>
                <p class="text-gray-700 mb-4">Tandem skydives with experienced instructors are available, or you can take the leap solo. Enjoy breathtaking views as you descend through the clouds and celebrate your achievement post-jump with refreshments and camaraderie.</p>
                <h3 class="text-lg font-semibold mb-2">What to Bring</h3>
                <ul class="list-disc list-inside mb-4 text-gray-700">
                    <li>Comfortable clothing suitable for the weather conditions</li>
                    <li>Closed-toe shoes</li>
                    <li>Valid photo ID</li>
                    <li>Sense of adventure and willingness to conquer your fears!</li>
                </ul>
                <p class="text-gray-700">Don't miss this opportunity to tick off one of the most exhilarating experiences from your bucket list! Join us for an unforgettable day of adrenaline-fueled adventure. See you in the skies!</p>
            </div>

            <!-- RSVP Button -->
            <div class="text-center">
                <a href="#" class="inline-block bg-green-500 text-white px-8 py-4 rounded-full hover:bg-green-600">Reserve Now !</a>
            </div>
        </div>
    </div>


    </div>
@endsection
