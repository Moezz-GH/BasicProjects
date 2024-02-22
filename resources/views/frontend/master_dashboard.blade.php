<!DOCTYPE html>
<html data-theme="light" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="{{ asset ('frontend/assets/logo.png')}}">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" integrity="sha512-PgQMlq+nqFLV4ylk1gwUOgm6CtIIXkKwaIHp/PAIWHzig/lKZSEGKEysh0TCVbHJXCLN7WetD8TFecIky75ZfQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
   

    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield('title')</title>
   
</head>
<body style="background: rgb(24,111,101);
background: linear-gradient(180deg, rgba(24,111,101,0.2497373949579832) 0%, rgba(255,255,255,0) 100%);overflow-x: hidden">


    @include('frontend.body.header')

    <main class="main">
        @yield('main')
    </main>

    @include('frontend.body.footer')

    <div id="loader" class="w-full h-full fixed top-0 left-0 bg-white opacity-100 z-50">
        <div class="flex justify-center items-center mt-[50vh]">
          <div class="fas fa-circle-notch fa-spin fa-5x text-teal-700"></div>
        </div>
      </div>



    <script>
      document.onreadystatechange = function() {
    if (document.readyState !== "complete") {
        document.querySelector("body").style.visibility = "hidden";
        document.querySelector("#loader").style.visibility = "visible";
    } else {
        document.querySelector("#loader").style.display = "none";
        document.querySelector("body").style.visibility = "visible";
    }
};
      </script>

      <script>
      document.addEventListener("DOMContentLoaded", function(event) {
  document.getElementById('payButton').click();
});
      </script>

      
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>


</body>

</html>
