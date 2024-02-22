@extends('frontend.master_dashboard')

@section('title')
    OasisQuest - Reservations
@endsection

@section('main')


<section class="bg-transparent my-10 dark:bg-gray-900" style="margin-top:5%;margin-bottom:5%">
    <div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-teal-500 z-0 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="md:visible invisible absolute -bottom-8 -left-72 w-72 h-72 bg-teal-800 z-0 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>


        <h1 class="pt-10 text-4xl text-center font-bold leading-tight tracking-tight text-teal-800 md:text-4xl dark:text-white">
            Soar High: Skydiving Adventure Day!
        </h1>
        <div class="flex justify-center mt-4 md:mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
              </svg>
              
        <span class="text-gray-800 font-base ml-2 mr-5 text-md">Tue, Feb 22 . 4:00PM</span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.24 48.24 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
          </svg>
          
          
        <span class="text-black ml-2 mr-5 text-md">OasisQuest</span>
        </div> 
    </div>
</section>

    <div class="container mx-auto py-8 ">
        <div class="max-w-6xl mx-auto">
            <!-- Event Header -->
            <div class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 lg:p-0 col-span-2">
                <!-- Event Image -->
                <div class="mb-5 grid gap-4">
                    <div>
                        <img class="h-auto  shadow-md max-w-full rounded-lg" src="{{asset('frontend/assets/freefall1.jpg')}}" alt="">
                    </div>
                    <div class="grid grid-cols-5 gap-4">
                        <div>
                            <img class="h-24 max-w-full rounded-lg" src="{{asset('frontend/assets/freefall2.jpg')}}" alt="">
                        </div>
                        <div>
                            <img class="h-24 max-w-full rounded-lg" src="{{asset('frontend/assets/freefall3.jpg')}}" alt="">
                        </div>
                        <div>
                            <img class="h-24 max-w-full rounded-lg" src="{{asset('frontend/assets/freefall4.jpg')}}" alt="">
                        </div>
                        <div>
                            <img class="h-24 max-w-full rounded-lg" src="{{asset('frontend/assets/freefall5.jpg')}}" alt="">
                        </div>
                    
                    
                    </div>
                </div>

                <!-- Event Details -->
                <div class="border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300  shadow-md rounded-xl p-6 mb-6">
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
                    <!-- component -->
<div class="flex items-center justify-center py-8 px-4">
    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    
                <div class="max-w-full w-full">
                    <div class="md:p-8 p-5 dark:bg-gray-800 bg-transparent rounded-lg">
                        <div class="px-4 flex items-center justify-between">
                            <span  tabindex="0" class="focus:outline-none  text-base font-bold dark:text-gray-100 text-gray-800">February 2024</span>
                            <div class="flex items-center">
                                <button aria-label="calendar backward" class="focus:text-gray-400 hover:text-gray-400 text-gray-800 dark:text-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-chevron-left" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="15 6 9 12 15 18" />
                                </svg>
                            </button>
                            <button aria-label="calendar forward" class="focus:text-gray-400 hover:text-gray-400 ml-3 text-gray-800 dark:text-gray-100"> 
                                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler  icon-tabler-chevron-right" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <polyline points="9 6 15 12 9 18" />
                                </svg>
                            </button>
    
                            </div>
                        </div>
                        <div class="flex items-center justify-between pt-12 overflow-x-auto">
                            <table class="w-full">
                                <thead>
                                    <tr>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Mo</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Tu</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">We</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Th</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Fr</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Sa</p>
                                            </div>
                                        </th>
                                        <th>
                                            <div class="w-full flex justify-center">
                                                <p class="text-base font-medium text-center text-gray-800 dark:text-gray-100">Su</p>
                                            </div>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                        </td>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center"></div>
                                        </td>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">1</p>
                                            </div>
                                        </td>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">2</p>
                                            </div>
                                        </td>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">3</p>
                                            </div>
                                        </td>
                                        <td class="pt-6">
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">4</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">5</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">6</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">7</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">8</p>
                                            </div>
                                           
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">9</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">10</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">11</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">12</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">13</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">14</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">15</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">16</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">17</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100">18</p>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">19</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">20</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">21</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="w-full h-full">
                                                <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                    <a  role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-teal-700 focus:bg-teal-500 hover:bg-teal-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-teal-700 rounded-full">22</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="w-full h-full">
                                                <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                    <a  role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-teal-700 focus:bg-teal-500 hover:bg-teal-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-teal-700 rounded-full">23</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="w-full h-full">
                                                <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                    <a  role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-teal-700 focus:bg-teal-500 hover:bg-teal-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-teal-700 rounded-full">24</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="w-full h-full">
                                                <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                    <a  role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-teal-700 focus:bg-teal-500 hover:bg-teal-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-teal-700 rounded-full">25</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="w-full h-full">
                                                <div class="flex items-center justify-center w-full rounded-full cursor-pointer">
                                                    <a  role="link" tabindex="0" class="focus:outline-none  focus:ring-2 focus:ring-offset-2 focus:ring-teal-700 focus:bg-teal-500 hover:bg-teal-500 text-base w-8 h-8 flex items-center justify-center font-medium text-white bg-teal-700 rounded-full">26</a>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">27</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">28</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">29</p>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="px-2 py-2 cursor-pointer flex w-full justify-center">
                                                <p class="text-base text-gray-500 dark:text-gray-100 font-medium">30</p>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
                    <div class="mt-4">
                    <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Ourdoor</span>
                    <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Skydiving</span>
                    <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Fun</span>
                    <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">Thrilling</span>
                    <span class="inline-flex items-center rounded-md bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">New Experience</span>
                    </div>
                    <div class="mt-5 relative flex justify-between items-center">
                        <a href="{{ route('checkout') }}" class="w-svw transition ease-in-out delay-150 hover:-translate-y-1 duration-300 z-10 inline-flex items-center justify-center px-5 py-3   font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                            Reserve Now! for 50 LYD
                        </a>
                    </div>

                </div>

  
            </div>

            <div class="h-72">

                <!-- Event Details -->
                <div class=" hidden lg:block border bg-slate-50 bg-opacity-20 backdrop-blur-lg  shadow-md border-gray-300 p-6 rounded-2xl overflow-hidden">
                    <div class="p-2">
                        <h1 class="text-xl font-semibold mb-4">Event info</h1>
                        <div class="flex mt-4 md:mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-14 h-14">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                              </svg>
                              
                            <p class="text-gray-800 font-base ml-2 mr-5  mb-2">Thursday, February 22, 2024 at 4:00 PM to Thursday, February 22, 2024 at 6:00 PM EST</p>
                        </div>
                        <div class="flex mt-4 md:mt-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                              </svg>
                              
                              
                            <p class="text-gray-800 font-base ml-2 mr-5  mb-2">Garyan, 32.166095, 13.034790</p>
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
                        <img src="{{asset('frontend/assets/map.png')}}" alt="Skydiving Event" class="border-gray-300 border mt-8 rounded-2xl mb-2 w-full h-44 object-cover">
                      
                    </div>
                    
                </div>


            </div>

            </div>
        </div>
    </div>


    

@endsection
