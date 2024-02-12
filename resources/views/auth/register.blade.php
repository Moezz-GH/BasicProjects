@extends('frontend.master_dashboard')

@section('title')
    OasisQuest - Register
@endsection

@section('main')
<section class="bg-transparent my-10 dark:bg-gray-900" style="margin-top:15%;margin-bottom:15%">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="absolute top-0 -right-4 w-72 h-72 bg-teal-500 z-0 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
        <div class="md:visible invisible absolute -bottom-8 left-10 w-72 h-72 bg-teal-800 z-0 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
         
        <div style="background-image: url({{asset('frontend/assets/dotts.png')}});background-size: cover;" class="w-full bg-transparent rounded-xl border border-solid border-teal-700  shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="pt-10 text-3xl text-center font-bold leading-tight tracking-tight text-teal-800 md:text-3xl dark:text-white">
                    Create and account
                </h1>
                <p class="text-sm text-center">Join us and start exploring.</p>
                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input id="name" class="placeholder-gray-400 text-sm block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Enter your name" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        
                    </div>
                    <div>
                        <x-input-label for="username" :value="__('Username')" />
                        <x-text-input id="username" class="placeholder-gray-400 text-sm block mt-1 w-full" type="text" name="username" :value="old('username')" placeholder="Enter your Username" required autofocus />
                        <x-input-error :messages="$errors->get('username')" class="mt-2" />
                    </div>
                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="placeholder-gray-400 text-sm block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="JGQmZ@example.com" autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                    <div>
                        <div >
                            <x-input-label for="password" :value="__('Password')" />
                
                            <x-text-input id="password" class="placeholder-gray-400 text-sm block mt-1 w-full"
                                            type="password"
                                            name="password"
                                            placeholder="Enter your password" required autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>
                    <div>
                        <div class="mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="placeholder-gray-400 text-sm block mt-1 w-full"
                                            type="password"
                                            placeholder="Confirm your password" name="password_confirmation" required autocomplete="new-password" />
                
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>
                    <div class="flex items-start mt-4">
                        <div class="flex items-center h-5">
                          <input id="terms" aria-describedby="terms" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                        </div>
                        <div class="ml-3 text-sm">
                          <label for="terms" class="font-light text-gray-500 dark:text-gray-300">I accept the <a class="font-medium text-primary-600 hover:underline dark:text-primary-500" href="#">Terms and Conditions</a></label>
                        </div>
                    </div>
                    <div class="w-full flex align-middle justify-center">
                    <x-primary-button type="submit" class="mt-4 w-full text-center text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 rounded-lg px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" style="display: block">Create an account </x-primary-button>
                    </div>
                    <p class=" mt-4 text-sm font-light text-gray-500 dark:text-gray-400">
                        Already have an account? <a href="{{ route('login') }}" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login here</a>
                    </p>
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

