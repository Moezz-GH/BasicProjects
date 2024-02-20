@extends('admin.admin_dashboard')

@section('main')


    @section('title')
        OasisQuest - Profile
    @endsection


    <main class="bg-gray-100 blue p-4 md:ml-64 h-auto pt-20 font-sans" style="background-image: url({{asset('backend/assets/Backround.png')}});background-size: cover;">
        <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-4 mb-4">



<section class="bg-transparent">
<div class="max-w-md px-4 mx-auto">
  <div class="relative flex flex-col min-w-0 break-wordsbackdrop-filter backdrop-blur-lg border bg-opacity-40 w-full mb-6 shadow-xl rounded-lg mt-5">
    <div class="px-6">
      <div class="flex flex-wrap justify-center">
        <div class="w-full px-4 flex justify-center">
          <div class="relative">
            <img alt="..." src="{{ (!empty($adminData->photo)) ? url('upload/admin_images/'.$adminData->photo) : url('upload/user_null.jpg')}}" class="shadow-xl rounded-full h-auto align-middle border-none pt-4  max-w-150-px">
          </div>
        </div>
        <div class="w-full px-4 text-center mt-5">
            <div class="p-3 text-center">
                <a href="{{route('edit.profile')}}" class="transition ease-in-out delay-150 hover:-translate-y-1 duration-300 z-10 inline-flex items-center justify-center px-5 py-3 mr-3 text-xs  text-center text-white rounded-full bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                    Edit Profile
                </a>
            </div>
          </div>
        <div class="w-full px-4 text-center mt-4">
         
        </div>
      </div>
      <div class="text-center mt-4">
        <h3 class="text-3xl font-semibold leading-normal text-black mb-2">
          {{$adminData->name}}
        </h3>
   
        <div class="mb-2 text-black mt-10">
          <i class="fas fa-envelope mr-2 text-lg text-black"></i>
          Email : {{$adminData->email}}
        </div>
        <div class="mb-2 text-black  mt-5">
          <i class="fas fa-map-marker mr-2 text-lg text-black"></i>
          addres : {{$adminData->address}}
        </div>
        <div class="mb-2 text-black mt-5">
          <i class="fas fa-phone mr-2 text-lg text-black"></i>
          Phone : {{$adminData->phone}}
        </div>
    
      </div>
      <div class="mt-10 py-10 border-t border-teal-200 text-center">
        <div class="flex flex-wrap justify-center">
          <div class="w-full px-4">
            <h3 class="text-xl text-center font-semibold leading-normal text-black mb-2">
                About/Bio
              </h3>
            <p class="mb-4 text-sm leading-relaxed text-black">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever,
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</section>
        </div>





@endsection