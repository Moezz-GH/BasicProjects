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

{{--Outdoor Experiences--}}
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
                    <a href="events">
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
        </div>
        </section>

{{--Sports--}}

    <section class="bg-transparent dark:bg-gray-900" style="margin-top:5%;">
        <div class="py-8 px-4 mx-auto max-w-screen-lg sm:py-1 lg:px-0">
            <div class="max-w-screen-md mb-8 lg:mb-8">
                <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Sports</h2>

            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-5 md:gap-2 md:space-y-0">


                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/soccer-player.png')}}" alt="Football" style="width: 60%">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Football</h3>
                     </a>
                    </div>

                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/basketball-player.png')}}" alt="Basketball" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Basketball</h3>
                     </a>
                </div>

                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/swimming.png')}}" alt="Swimming" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Swimming</h3>
                     </a>
                </div>
                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/cycling.png')}}" alt="Cycling" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Cycling</h3>
                     </a>
                </div>
                <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                    <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                       <img src="{{ asset ('frontend/assets/table-tennis.png')}}" alt="Table-Tennis" style="width: 75%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Table Tennis</h3>
                     </a>
                </div>
             </div>
         </div>
        </section>

{{--Arts--}}

<section class="bg-transparent dark:bg-gray-900" style="margin-top:5%;">
    <div class="py-8 px-4 mx-auto max-w-screen-lg sm:py-1 lg:px-0">
        <div class="max-w-screen-md mb-8 lg:mb-8">
            <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Art</h2>

        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-5 md:gap-2 md:space-y-0">


            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/clay-crafting.png')}}" alt="Clay Crafting" style="width: 60%">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Clay Crafting</h3>
                </a>
            </div>

            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/knitting.png')}}" alt="Knitting" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Knitting</h3>
                </a>
            </div>

            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/live-music.png')}}" alt="Music" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Music</h3>
                </a>
            </div>
            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/paint-palette.png')}}" alt="Painting" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Painting</h3>
                </a>
            </div>
            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/theater.png')}}" alt="Theater" style="width: 75%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Theater</h3>
                </a>
            </div>
        </div>
    </div>
</section>

{{--Agriculture--}}

<section class="bg-transparent dark:bg-gray-900" style="margin-top:5%;">
    <div class="py-8 px-4 mx-auto max-w-screen-lg sm:py-1 lg:px-0">
        <div class="max-w-screen-md mb-8 lg:mb-8">
            <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Agriculture</h2>

        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-5 md:gap-2 md:space-y-0">


            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/cultivation.png')}}" alt="Clay Crop Cultivation" style="width: 60%">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Crop Cultivation</h3>
                </a>
            </div>

            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/cow.png')}}" alt="Livestock Rearing" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Livestock Rearing</h3>
                </a>
            </div>

            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/gardening.png')}}" alt="Gardening" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Gardening</h3>
                </a>
            </div>
            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/fruit.png')}}" alt="Horticulture" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Horticulture</h3>
                </a>
            </div>
            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/fish.png')}}" alt="Aquaculture" style="width: 75%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Aquaculture</h3>
                </a>
            </div>
        </div>
    </div>
</section>

{{--Indoor Experiences--}}
<section class="bg-transparent dark:bg-gray-900" style="margin-top:5%;">
    <div class="py-8 px-4 mx-auto max-w-screen-lg sm:py-1 lg:px-0">
        <div class="max-w-screen-md mb-8 lg:mb-8">
            <h2 class="mb-4 text-2xl tracking-tight font-extrabold text-gray-900 dark:text-white">Indoor Experiences</h2>

        </div>
        <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-5 md:gap-2 md:space-y-0">


            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/dice.png')}}" alt="Board Games" style="width: 60%">
                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Board Games</h3>
                </a>
            </div>

            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/game-console.png')}}" alt="Video Games" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Video Games</h3>
                </a>
            </div>

            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/chef.png')}}" alt="Cooking/Baking" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Cooking/Baking</h3>
                </a>
            </div>
            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/writing.png')}}" alt="Writing" style="width: 60%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Writing</h3>
                </a>
            </div>
            <div class="transition ease-in-out delay-50 hover:shadow-2xl hover:-translate-y-1 border bg-slate-50 bg-opacity-20 backdrop-blur-lg border-gray-300 p-6 rounded-2xl">
                <a href="">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                        <img src="{{ asset ('frontend/assets/watching-a-movie.png')}}" alt="Watching Movies" style="width: 75%">

                    </div>
                    <h3 class="mb-2 text-xl font-bold dark:text-white">Watching Movies</h3>
                </a>
            </div>
        </div>
    </div>
</section>

    <br><br><br><br><br><br><br><br><br>


@endsection

