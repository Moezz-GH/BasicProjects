@extends('admin.admin_dashboard')

@section('main')


    @section('title')
        OasisQuest - Control Panel
    @endsection


    <main class="bg-gray-100 teal p-4 md:ml-64 h-auto pt-20 font-sans" style="background-image: url({{asset('backend/assets/Backround.png')}});background-size: cover;">
        <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-4 mb-4">

         <!-- component -->



            <section class="bg-transparent">
            <div class="max-w-md px-4 mx-auto">
            <div class="relative flex flex-col min-w-0 break-wordsbackdrop-filter border backdrop-blur-lg bg-opacity-40 w-full mb-6 shadow-xl rounded-lg mt-5">
                <div class="px-6">
            <h1 class="text-3xl py-10 font-bold leading-tight text-gray-900">Edit Profile</h1>     
            <p class= "block font-bold leading-tight text-gray-900">Update your profile picture and info</p>

            
            <form  action="{{Route('store.profile')}}" method="post" enctype="multipart/form-data" class="max-w-md py-10  -mx-auto">
            @csrf


                <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="name" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500 dark:shadow-sm-light" placeholder="New Name" value="{{$adminEdit->name}}" >
                </div>
                <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                <input type="email" name="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500 dark:shadow-sm-light" placeholder="Example@example.com" value="{{$adminEdit->email}}" >
                </div>
                <div class="mb-5">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Address</label>
                <input type="text" name="address" id="address" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500 dark:shadow-sm-light" placeholder="1234 Main St" value="{{$adminEdit->address}}" >
                </div>
            
                <div class="mb-5">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your Phone</label>
                <input type="text" name="phone" id="phone" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-teal-500 focus:border-teal-500 block w-full p-2.5 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-teal-500 dark:focus:border-teal-500 dark:shadow-sm-light" placeholder="092*******" value="{{$adminEdit->phone}}" >
                </div>
                <div class="mb-5">
                    
                    <div id="image-preview" class="max-w-sm p-6  border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
                        <input  type="file" id="upload" name="upload" class="hidden" accept="image/png, image/jpg, image/jpeg"/>
                        <label for="upload" class="cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-700 mx-auto mb-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                        </svg>
                        <h5 class="text-xl font-bold tracking-tight text-gray-700">Upload picture</h5>
                        <p class="font-normal text-sm text-gray-400 md:px-6">Choose photo size should be less than <b class="text-gray-600">2mb</b></p>
                        <p class="font-normal text-sm text-gray-400 md:px-6">and should be in <b class="text-gray-600">JPG, PNG,</b> format.</p>
                        <span id="filename" class="text-gray-500 bg-gray-200 z-50"></span>
                        </label>
                    </div>

                </div>
                
            
            
            
                <button type="submit" class="mt-4 w-full text-center text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" style="display: block">Save Changes</button>
            </form>
            </div>
            
                </div>
                
            
                </div>
            </div>
            </div>

            </section>
        </div>





@endsection