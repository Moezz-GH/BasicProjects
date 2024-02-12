<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/x-icon" href="{{ asset ('frontend/assets/logo.png')}}">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
        @vite(['resources/css/app.css','resources/js/app.js'])
        <title>@yield('title')</title>
    </head>
<body style="background: rgb(24,111,101);
background: linear-gradient(180deg, rgba(24,111,101,0.2497373949579832) 0%, rgba(255,255,255,0) 100%);overflow-x: hidden">
    
    @include('admin.body.header')

    <main class="main">
        @yield('main')
    </main>

    
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>
</html>