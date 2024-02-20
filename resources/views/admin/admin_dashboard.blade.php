<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/x-icon" href="{{ asset ('frontend/assets/logo.png')}}">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css"  rel="stylesheet" />
        <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/
css/all.min.css">
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
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

    <script>
        const uploadInput = document.getElementById('upload');
        const filenameLabel = document.getElementById('filename');
        const imagePreview = document.getElementById('image-preview');
      
        // Check if the event listener has been added before
        let isEventListenerAdded = false;


        uploadInput.addEventListener('change', (event) => {
          const file = event.target.files[0];
      
          if (file) {
            filenameLabel.textContent = file.name;
            reader.readAsDataURL(file);
      
            const reader = new FileReader();
            reader.onload = (e) => {
              imagePreview.innerHTML =
                `<img src="${e.target.result}" class="max-h-48 rounded-lg mx-auto" alt="Image preview" />`;
               
              imagePreview.classList.remove('border-dashed', 'border-2', 'border-gray-400');
      
              // Add event listener for image preview only once
              if (!isEventListenerAdded) {
                imagePreview.addEventListener('click', () => {
                  uploadInput.click();
                });
      
                isEventListenerAdded = true;
              }
            };
           
          } else {
            filenameLabel.textContent = '';
            imagePreview.innerHTML =
              `<div class="bg-gray-200 h-48 rounded-lg flex items-center justify-center text-gray-500">No image preview</div>`;
            imagePreview.classList.add('border-dashed', 'border-2', 'border-gray-400');
      
            // Remove the event listener when there's no image
            imagePreview.removeEventListener('click', () => {
              uploadInput.click();
              
            });
      
            isEventListenerAdded = false;
          }
        });
      
        uploadInput.addEventListener('click', (event) => {
          event.stopPropagation();
        });
      </script>


</body>
</html>