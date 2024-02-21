<section class="bg-transparent dark:bg-gray-900 mt-10">
    <div class="items-center py-8 mx-auto max-w-screen-full  md:grid md:grid-cols-2 sm:py-16 ">
        <div class="mt-4 px-10 h-full flex items-center md:mt-0 md:px-20 py-16" style="background-image: url({{asset('frontend/assets/BannnerBackround.png')}});background-size: cover;">
            <div>
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white dark:text-white">We are agency 
                    based in Tripoli.</h2>
                <p class="mb-6 font-light text-white md:text-sm dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin at quam fringilla, scelerisque nisl in, accumsan diam. Quisque sollicitudin risus eu tortor euismod imperdiet. .</p>
                <a href="{{url('/about')}}" class="transition ease-in-out delay-150 hover:-translate-y-1 duration-300 inline-flex items-center text-white border bg-transparent hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Know More
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </a>
            </div>
        </div>
        <div style="display: flex; justify-content: center;  align-items: center ;height:500px; background-image: url({{ asset ('frontend/assets/BoaredWater.png')}});background-size: cover;">
       
            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script> 

            <dotlottie-player src="{{ asset ('frontend/assets/Animation - 1708448311035.lottie')}}" background="transparent" speed="1" style="width: 200px; height: 200px;" loop autoplay></dotlottie-player>
        </div>
    </div>
</section>

<section class="bg-transparent dark:bg-gray-900">
    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-lg xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
        <div class="lg:grid hidden  items-center grid-cols-2 gap-4">
            <div class="relative">
              <img  class="mb-5 rounded h-full w-full object-cover" src="{{ asset ('frontend/assets/Rectangle 10.png')}}" alt="Image 1">
              <img class=" h-full rounded w-full object-cover" src="{{ asset ('frontend/assets/Rectangle 8.png')}}" alt="Image 2">
            </div>
            <div>
              <img class="h-full rounded w-full object-cover" src="{{ asset ('frontend/assets/Rectangle 9.png')}}" alt="Image 3">
              <img class="absolute  left-0 h-50 rounded w-50 object-cover" src="{{ asset ('frontend/assets/Dotted Shape.png')}}" alt="Image 3">
            </div>
          </div>
        <div class="mt-4 md:mt-0"style="background-image: src('public/frontend/assets/BannnerBackround.png'); ">
            <h2 class="mb-4 text-xl tracking-tight font-extrabold text-teal-800 dark:text-white">Why Choose Us</h2>
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Make your customers happy by giving services.</h2>
            <p class="mb-6 font-light text-gray-500 md:text-sm dark:text-gray-400">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.</p>
            <p class="mb-6 font-light text-gray-500 md:text-sm dark:text-gray-400">A domain name is one of the first steps to establishing your brand. Secure a consistent brand image with a domain name that matches your business.</p>
            <a href="{{ route('reservation') }}" class="transition ease-in-out delay-150 hover:-translate-y-1 duration-300 inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                Our Services
                <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                
            </a>
            
        </div>
    </div>
</section>

<!-- Container for the Testimonials -->
<div class="grid gap-6 text-center  md:grid-cols-3 lg:gap-12 mx-20 my-20">

    <!-- First Testimonial -->
    <div class="mb-12 md:mb-0">
        <div class="mb-6 flex justify-center">
            <img
                src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(1).jpg"
                class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
        </div>
        <h5 class="mb-4 text-xl font-semibold">Maria Smantha</h5>
        <h6 class="mb-4 font-semibold text-primary dark:text-primary-500">
            Web Developer
        </h6>
        <p class="mb-4">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                class="inline-block h-7 w-7 pr-2"
                viewBox="0 0 24 24">
                <path
                    d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
            </svg>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos
            id officiis hic tenetur quae quaerat ad velit ab hic tenetur.
        </p>
    </div>

    <!-- Second Testimonial -->
    <div class="mb-12 md:mb-0">
        <div class="mb-6 flex justify-center">
            <img
                src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(2).jpg"
                class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
        </div>
        <h5 class="mb-4 text-xl font-semibold">Lisa Cudrow</h5>
        <h6 class="mb-4 font-semibold text-primary dark:text-primary-500">
            Graphic Designer
        </h6>
        <p class="mb-4">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                class="inline-block h-7 w-7 pr-2"
                viewBox="0 0 24 24">
                <path
                    d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
            </svg>
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
            suscipit laboriosam, nisi ut aliquid commodi.
        </p>
        <ul class="mb-0 flex items-center justify-center">
            <li>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5 text-yellow-500">
                    <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                        clip-rule="evenodd" />
                </svg>
            </li>
            <li>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5 text-yellow-500">
                    <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                        clip-rule="evenodd" />
                </svg>
            </li>
            <li>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5 text-yellow-500">
                    <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                        clip-rule="evenodd" />
                </svg>
            </li>
            <li>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5 text-yellow-500">
                    <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                        clip-rule="evenodd" />
                </svg>
            </li>
            <li>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5 text-yellow-500">
                    <path
                        d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                </svg>
            </li>
        </ul>
    </div>

    <!-- Third Testimonial -->

    <div class="mb-12 md:mb-0">
        <div class="mb-6 flex justify-center">
            <img
                src="https://tecdn.b-cdn.net/img/Photos/Avatars/img%20(2).jpg"
                class="w-32 rounded-full shadow-lg dark:shadow-black/30" />
        </div>
        <h5 class="mb-4 text-xl font-semibold">Lisa Cudrow</h5>
        <h6 class="mb-4 font-semibold text-primary dark:text-primary-500">
            Graphic Designer
        </h6>
        <p class="mb-4">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                class="inline-block h-7 w-7 pr-2"
                viewBox="0 0 24 24">
                <path
                    d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
            </svg>
            Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
            suscipit laboriosam, nisi ut aliquid commodi.
        </p>
        <ul class="mb-0 flex items-center justify-center">
            <li>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5 text-yellow-500">
                    <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                        clip-rule="evenodd" />
                </svg>
            </li>
            <li>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5 text-yellow-500">
                    <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                        clip-rule="evenodd" />
                </svg>
            </li>
            <li>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5 text-yellow-500">
                    <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                        clip-rule="evenodd" />
                </svg>
            </li>
            <li>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5 text-yellow-500">
                    <path
                        fill-rule="evenodd"
                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                        clip-rule="evenodd" />
                </svg>
            </li>
            <li>
                <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                    class="h-5 w-5 text-yellow-500">
                    <path
                        d="M13 14.725c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275zm-13 0c0-5.141 3.892-10.519 10-11.725l.984 2.126c-2.215.835-4.163 3.742-4.38 5.746 2.491.392 4.396 2.547 4.396 5.149 0 3.182-2.584 4.979-5.199 4.979-3.015 0-5.801-2.305-5.801-6.275z" />
                </svg>
            </li>
        </ul>
    </div>


    </div>
</div>

<section class="bg-transparent dark:bg-gray-900" style="background-image: url({{asset('frontend/assets/savenow.png')}});background-size: cover;">
    <div class="py-8 px-4 mx-auto flex items-center h-96 max-w-screen-full sm:py-16 lg:px-6">
        <div class="mx-auto max-w-screen-sm text-center">
            <h2 class="mb-4 text-xl tracking-tight font-bold leading-tight text-white dark:text-white">Extra 30% Off Online</h2>
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold leading-tight text-white dark:text-white">Summer Season Sale</h2>
            <p class="mb-6 mx-10 font-light text-white dark:text-gray-400 md:text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel dolor
                pellentesque, varius elit quis, malesuada quam.</p>
                <a href="{{ route('reservation') }}" class="transition ease-in-out delay-150 hover:-translate-y-1 duration-300 inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Reserve Now
                    <svg class="ml-2 -mr-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    
                </a>
        </div>
    </div>
</section>

