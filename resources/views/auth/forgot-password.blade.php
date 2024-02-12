@extends('frontend.master_dashboard')

@section('title')
    OasisQuest - Forget Password
@endsection

@section('main')


    <!-- Session Status -->
    


<section class="bg-transparent my-10 dark:bg-gray-900" style="margin-top:5%;margin-bottom:5%">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="absolute top-0 -right-4 w-72 h-72 bg-teal-500 z-0 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="md:visible invisible absolute -bottom-8 left-10 w-72 h-72 bg-teal-800 z-0 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
         
        <div style="background-image: url({{asset('frontend/assets/dotts.png')}});background-size: cover;" class="w-full bg-transparent rounded-xl border border-solid border-teal-700  shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <h1 class="pt-10 text-3xl text-center font-bold leading-tight tracking-tight text-teal-800 md:text-3xl dark:text-white">
                    Reset Password
                </h1>
                <p class="text-sm text-center">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email"  placeholder="Enter your Email" class="placeholder-gray-400 text-sm block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        
                    </div>
                  
                    <div>
                        <x-primary-button type="submit" class="mt-4 w-full text-center text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" style="display: block">{{ __('Email Password Reset Link') }}</x-primary-button>
                    </div>
                   
                </form>
                <div class="mt-6">

                    <div class="relative">
                        
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-transparent text-gray-500">
                                Or continue with
                            </span>
                        </div>
                    </div>
    
                    <div class="mt-6 grid grid-cols-3 gap-3">
                        <div>
                            <a href="#"
                                class="transition ease-in-out delay-50 hover:-translate-y-1 duration-300 w-full flex items-center justify-center px-8 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-blue-800 hover:bg-teal-800">
                                <img class="h-5 w-5" src="{{ asset ('frontend/assets/facebook.svg')}}"
                                    alt="">
                            </a>
                        </div>
                        <div>
                            <a href="#"
                                class="transition ease-in-out delay-50 hover:-translate-y-1 duration-300 w-full flex items-center justify-center px-8 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-blue-500 hover:bg-teal-800">
                                <img class="h-5 w-5" src="{{ asset ('frontend/assets/twitter.svg')}}"
                                    alt="">
                            </a>
                        </div>
                        <div>
                            <a href="#"
                                class="transition ease-in-out delay-50 hover:-translate-y-1 duration-300 w-full flex items-center justify-center px-8 py-3 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-red-700 hover:bg-teal-800">
                                <img class="h-6 w-6" src="{{ asset ('frontend/assets/google.svg')}}"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
@endsection

