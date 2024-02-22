@extends('frontend.master_dashboard')

@section('title')
    OasisQuest - Events
@endsection

@section('main')


<section class="bg-transparent my-10 dark:bg-gray-900" style="margin-top:5%;margin-bottom:5%">
    <div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-teal-500 z-0 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="md:visible invisible absolute -bottom-8 -left-72 w-72 h-72 bg-teal-800 z-0 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>


        <h1 class="pt-10 text-4xl text-center font-bold leading-tight tracking-tight text-teal-800 md:text-4xl dark:text-white">
            SkyDiving
        </h1>
        <p class="text-sm text-center">Meet other people interested in SkyDiving</p>
    </div>
</section>

<section class="bg-transparent dark:bg-gray-900" style="margin-top:5%;margin-bottom:5%">
    <div class="py-8 px-4 mx-auto max-w-screen-lg sm:py-1 lg:px-0">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Event Card -->
            <div class=" transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl overflow-hidden">
                <img src="{{asset('frontend/assets/freefall1.jpg')}}" alt="Skydiving Event" class="rounded-2xl mb-2 w-full h-44 object-cover">
                <div class="p-2">
                    <h3 class="font-bold text-2xl  text-gray-800 mb-2">Soar High: Skydiving Adventure Day!</h3>
                    <p class="text-sm text-gray-700">Hosted By: OasisQuest</p>
                    <div class="flex mt-4 md:mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                          </svg>
                          
                        <p class="text-gray-800 font-base ml-2 mr-5  mb-2">Tue, Feb 22 . 4:00PM</p>
                    </div>
                    <div class="flex mt-4 md:mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                          </svg>
                          
                    <span class="text-gray-800 font-base ml-2 mr-5 text-md">2 going</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                      </svg>
                      
                    <span class="text-black ml-2 mr-5 text-md">50 LD</span>
                    </div> 
                    <div class="mt-5 relative flex justify-between items-center">
                        <a href="{{ route('details') }}" class="w-svw transition ease-in-out delay-150 hover:-translate-y-1 duration-300 z-10 inline-flex items-center justify-center px-5 py-3   font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                            Details
                        </a>
                    </div>
                </div>
            </div>
            <div class=" transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl overflow-hidden">
                <img src="{{asset('frontend/assets/freefall2.jpg')}}" alt="Skydiving Event" class="rounded-2xl mb-2 w-full h-44 object-cover">
                <div class="p-2">
                    <h3 class="font-bold text-2xl  text-gray-800 mb-2">Soar High: Skydiving Adventure Day!</h3>
                    <p class="text-sm text-gray-700">Hosted By: OasisQuest</p>
                    <div class="flex mt-4 md:mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                          </svg>
                          
                        <p class="text-gray-800 font-base ml-2 mr-5  mb-2">Tue, Feb 22 . 4:00PM</p>
                    </div>
                    <div class="flex mt-4 md:mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                          </svg>
                          
                    <span class="text-gray-800 font-base ml-2 mr-5 text-md">2 going</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                      </svg>
                      
                    <span class="text-black ml-2 mr-5 text-md">50 LD</span>
                    </div> 
                    <div class="mt-5 relative flex justify-between items-center">
                        <a href="{{ route('details') }}" class="w-svw transition ease-in-out delay-150 hover:-translate-y-1 duration-300 z-10 inline-flex items-center justify-center px-5 py-3   font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                            Details
                        </a>
                    </div>
                </div>
            </div>
            <div class=" transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl overflow-hidden">
                <img src="{{asset('frontend/assets/freefall3.jpg')}}" alt="Skydiving Event" class="rounded-2xl mb-2 w-full h-44 object-cover">
                <div class="p-2">
                    <h3 class="font-bold text-2xl  text-gray-800 mb-2">Soar High: Skydiving Adventure Day!</h3>
                    <p class="text-sm text-gray-700">Hosted By: OasisQuest</p>
                    <div class="flex mt-4 md:mt-6">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                          </svg>
                          
                        <p class="text-gray-800 font-base ml-2 mr-5  mb-2">Tue, Feb 22 . 4:00PM</p>
                    </div>
                    <div class="flex mt-4 md:mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                          </svg>
                          
                    <span class="text-gray-800 font-base ml-2 mr-5 text-md">2 going</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 6v.75m0 3v.75m0 3v.75m0 3V18m-9-5.25h5.25M7.5 15h3M3.375 5.25c-.621 0-1.125.504-1.125 1.125v3.026a2.999 2.999 0 0 1 0 5.198v3.026c0 .621.504 1.125 1.125 1.125h17.25c.621 0 1.125-.504 1.125-1.125v-3.026a2.999 2.999 0 0 1 0-5.198V6.375c0-.621-.504-1.125-1.125-1.125H3.375Z" />
                      </svg>
                      
                    <span class="text-black ml-2 mr-5 text-md">50 LD</span>
                    </div> 
                    <div class="mt-5 relative flex justify-between items-center">
                        <a href="{{ route('details') }}" class="w-svw transition ease-in-out delay-150 hover:-translate-y-1 duration-300 z-10 inline-flex items-center justify-center px-5 py-3   font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                            Details
                        </a>
                    </div>
                </div>
            </div>
          

        </section>

@endsection
