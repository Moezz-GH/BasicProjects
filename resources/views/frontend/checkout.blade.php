@extends('frontend.master_dashboard')

@section('title')
    OasisQuest - Checkout
@endsection

@section('main')

<section class="bg-transparent my-10 dark:bg-gray-900" style="margin-top:5%;margin-bottom:5%">
    <div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-teal-500 z-0 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>

        <h1 class="pt-10 text-3xl text-center font-bold leading-tight tracking-tight text-teal-800 md:text-4xl dark:text-white">
Checkout         </h1>
        <p class="text-sm text-center">Finish your order and get the ticket </p>
    </div>
</section>



<div class="container mx-auto py-4 ">
    <div class="max-w-6xl mx-auto">
        <!-- Event Header -->
        <div class="grid  grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="p-6 lg:p-0 col-span-2">
            <!-- Event Image -->
           

            <!-- Event Details -->
            <div class="border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300  shadow-md rounded-xl p-6 ">
                <div class="card h-fit max-w-6xl px-6" id="form">
                        <div class="flex justify-center items-center space-x-4">
                        <img src="{{asset('frontend/assets/mo3am.png')}}" class="w-32">
                        <img src="{{asset('frontend/assets/26.png')}}" class="w-24 h-24">
                        <img src="{{asset('frontend/assets/27.png')}}" class="w-24 h-24">
                        <img src="{{asset('frontend/assets/28.png')}}" class="w-32 h-12">
                        </div>
                    <form action="#" class="space-y-3">
                        <div>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email address</label>
                            <input type="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" value="{{$adminData->email}}" required>
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name on card</label>
                            <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Mohamed Algritli" required>
                        </div>
                        <div>
                            <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Card Number</label>
                            <input type="phone" id="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="09XXXXXXX" required>
                        </div>
                        
                            <div>
                              <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Expiration date (MM/YY)</label>
                              <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="20XX/XX/XX" required>
                            </div>
                          
                           
  
                      
                        <div>
                            <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
                            <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Address" required>
                        </div>
                       
                        <div class="mt-5 relative flex justify-between items-center">
                            <input  id="payButton" data-modal-target="deleteModal" data-modal-toggle="deleteModal" type="submit"name="submit" value="Pay 300 LYD" href="{{ route('details') }}" class="w-svw transition ease-in-out delay-150 hover:-translate-y-1 duration-300 z-10 inline-flex items-center justify-center mt-4 px-4 py-3   font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                            </input>
                        </div>
                    </form>
                </div>

            </div>


        </div>

        <div class="h-72">

            <!-- Event Details -->
            <div class="lg:block border bg-slate-50 bg-opacity-20 backdrop-blur-lg  shadow-md border-gray-300 p-6 rounded-2xl overflow-hidden">
                <div class="p-2">
                    <h1 class="text-xl font-semibold mb-4">Event info</h1>
                    <div class="mt-8">
                        <div class="flow-root">
                          <ul role="list" class="-my-6 divide-y divide-gray-200">
                            <li class="flex py-6">
                              <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                <img src="{{asset('frontend/assets/freefall1.jpg')}}" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                              </div>
        
                              <div class="ml-4 flex flex-1 flex-col">
                                <div>
                                  <div class="flex justify-between text-base font-medium text-gray-900">
                                    <h3>
                                      <a href="#">Skydiving Adventure Day!</a>
                                    </h3>
                                    <p class="ml-4">300 LYD</p>
                                  </div>
                                  <p class="mt-1 text-sm text-gray-500">Ticket</p>
                                </div>
                                <div class="flex flex-1 items-end justify-between text-sm">
                                  <p class="text-teal-800">Qty 1</p>
                                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15 12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                  </svg>
                                  
        
                                  <div class="flex">
                                    <button type="button" class="font-medium text-teal-800 hover:text-indigo-500">Remove</button>
                                  </div>
                                </div>
                              </div>
                            </li>
                       
        
                            <!-- More products... -->
                          </ul>
                        </div>
                      </div>
                    </div>
                   
                  
                </div>
            </div>


        </div>

        </div>
    </div>

    
<!-- Main modal -->
<div id="deleteModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <button type="button" class="text-gray-400 absolute top-2.5 right-2.5 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="deleteModal">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                <span class="sr-only">Close modal</span>
            </button>
        
            <svg class="text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
              </svg>
              
            <p class="mb-4 text-gray-500 dark:text-gray-300">Are you sure you want to confirm payment for this item?</p>
            <div class="flex justify-center items-center space-x-4">
                <button data-modal-toggle="deleteModal" type="button" class="py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                    No, cancel
                </button>
                <a href="{{ route('checkout.done') }}" class="py-2 px-3 text-sm font-medium text-center text-white bg-teal-600 rounded-lg hover:bg-teal-700 focus:ring-4 focus:outline-none focus:ring-teal-300 dark:bg-teal-500 dark:hover:bg-teal-600 dark:focus:ring-teal-900">
                    Yes, I'm sure
                </a>
            </div>
        </div>
    </div>
</div>


</div>




@endsection

