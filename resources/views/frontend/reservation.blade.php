@extends('frontend.master_dashboard')

@section('title')
    OasisQuest - Reservations
@endsection

@section('main')





<section class="bg-transparent my-10 dark:bg-gray-900" style="margin-top:5%;margin-bottom:5%">
    <div>
        <div class="absolute top-0 -right-4 w-72 h-72 bg-teal-500 z-0 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>

        <h1 class="pt-10 text-4xl text-center font-bold leading-tight tracking-tight text-teal-800 md:text-3xl dark:text-white">
            Explore our different Categories
        </h1>
        <p class="text-sm text-center">What are you interested in? Find an event near you</p>
    </div>
</section>

    <section class="bg-transparent dark:bg-gray-900" style="margin-top:5%;">
        <div class="py-8 px-4 mx-auto max-w-screen-lg sm:py-1 lg:px-0">
            <div class="max-w-screen-md mb-8 lg:mb-8">
                <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Outdoor Experiences</h2>
               
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-5 md:gap-2 md:space-y-0">
               
          
                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/hiking.png')}}" alt="Skydiving" style="width: 60%">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Hiking</h3>
                     </a> 
                    </div>  

                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/paratrooper.png')}}" alt="Skydiving" style="width: 60%">
                            
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Skydiving</h3>
                     </a> 
                </div>  

                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/fishing.png')}}" alt="Skydiving" style="width: 60%">
                            
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Fishing</h3>
                     </a> 
                </div>  
                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/picnic-basket.png')}}" alt="Skydiving" style="width: 60%">
                            
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Picniking</h3>
                     </a> 
                </div>  
                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/jockey.png')}}" alt="Skydiving" style="width: 75%">
                            
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Horse Riding</h3>
                     </a> 
                </div>  
        </div>
        </section>


        
    <section class="bg-transparent dark:bg-gray-900" style="margin-top:5%;">
        <div class="py-8 px-4 mx-auto max-w-screen-lg sm:py-1 lg:px-0">
            <div class="max-w-screen-md mb-8 lg:mb-8">
                <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Outdoor Experiences</h2>
               
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-5 md:gap-2 md:space-y-0">
               
          
                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/hiking.png')}}" alt="Skydiving" style="width: 60%">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Hiking</h3>
                     </a> 
                    </div>  

                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/paratrooper.png')}}" alt="Skydiving" style="width: 60%">
                            
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Skydiving</h3>
                     </a> 
                </div>  

                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/fishing.png')}}" alt="Skydiving" style="width: 60%">
                            
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Fishing</h3>
                     </a> 
                </div>  
                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/picnic-basket.png')}}" alt="Skydiving" style="width: 60%">
                            
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Picniking</h3>
                     </a> 
                </div>  
                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/jockey.png')}}" alt="Skydiving" style="width: 75%">
                            
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Horse Riding</h3>
                     </a> 
                </div>  
        </div>
        </section>


</section>

@endsection

