<!DOCTYPE html>
<html data-theme="light" lang="en">
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
<div class="h-100% max-w-60 bg-blue-950">
    <div class="pt-5">
        <label class="mt- m-8 text-sm text-gray-500">MENU</label>
        <button id="collapssable" class="ml-6 mt-4 border-spacing-2 rounded bg-gray-700 px-12 text-gray-400">Dashboard</button>
    </div>

    <div class="mt-2">
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Analytics</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Marketing</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">CRM</a>
        </div>
    </div>
    <div class="mt-2">
        <button id="collapssable" class="ml-6 border-spacing-2 rounded px-12 text-gray-300">Calendar</button>
    </div>
    <div>
        <button id="collapssable" class="ml-6 mt-4 border-spacing-2 rounded px-12 text-gray-300">Profile</button>
    </div>
    <div class="mt-5">
        <button id="collapssable" class="ml-6 border-spacing-2 rounded px-12 text-gray-300">Task</button>
    </div>
    <div class="mt-2">
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">List</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Kanban</a>
        </div>
    </div>

    <div class="mt-5">
        <button id="collapssable" class="ml-6 border-spacing-2 rounded px-12 text-gray-300">Forms</button>
    </div>
    <div class="mt-2">
        <div class="m-4 mx-16 mr-0">
            <a class="px-2 text-gray-300 hover:text-white">Form Elements</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Form Layout</a>
        </div>
        <div class="m-4 mx-16 mr-0">
            <a class="px-2 text-gray-300 hover:text-white">Form Validation</a>
        </div>
    </div>

    <div class="mt-5">
        <button id="collapssable" class="ml-6 border-spacing-2 rounded px-12 text-gray-300">Table</button>
    </div>
    <div class="mt-5">
        <button id="collapssable" class="ml-6 border-spacing-2 rounded px-12 text-gray-300">Pages</button>
    </div>
    <div class="mt-2">
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Settings</a>
        </div>
        <div class="m-4 mx-16 mr-0">
            <a class="px-2 text-gray-300 hover:text-white">File Manager</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Data Tables</a>
        </div>
        <div class="m-4 mx-16 mr-0">
            <a class="px-2 text-gray-300 hover:text-white">Pricing Table</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Error Page</a>
        </div> <div class="m-4 mx-16 mr-0">
            <a class="px-2 text-gray-300 hover:text-white">Mail Success</a>
        </div>
    </div>
    <div class="pt-5">
        <label class="mt- m-8 text-sm text-gray-500">SUPPORT</label>
        <button id="collapssable" class="ml-6 mt-3 border-spacing-2 rounded px-12 text-gray-300">Messages</button>
    </div>
    <div class="mt-5">
        <button id="collapssable" class="ml-6 border-spacing-2 rounded px-12 text-gray-300">Inbox</button>
    </div>
    <div class="mt-5">
        <button id="collapssable" class="ml-6 border-spacing-2 rounded px-12 text-gray-300">Invoice</button>
    </div>

    <div class="pt-5">
        <label class="mt- m-8 text-sm text-gray-500">OTHERS</label>
        <button id="collapssable" class="ml-6 mt-3 border-spacing-2 rounded px-12 text-gray-300">Chart</button>
    </div>
    <div class="mt-5">
        <button id="collapssable" class="ml-6 border-spacing-2 rounded px-12 text-gray-300">UI Elements</button>
    </div>
    <div class="mt-2">
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Alerts</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Buttons</a>
        </div>
        <div class="m-4 mx-16 mr-0">
            <a class="px-2 text-gray-300 hover:text-white">Button Group</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Badge</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Breadcrumb</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Cards</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Dropdowns</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Modals</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Tabs</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Tooltips</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Popovers</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Accordion</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Notifications</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Pagination</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Progress</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Carousel</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Images</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Videos</a>
        </div>
    </div>
    <div class="mt-5">
        <button id="collapssable" class="ml-6 border-spacing-2 rounded px-12 text-gray-300">Authentication</button>
    </div>
    <div class="mt-2">
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Sign In</a>
        </div>
        <div class="m-4">
            <a class="px-14 text-gray-300 hover:text-white">Sign Up</a>
        </div>
        <div class="m-4 mx-16 mr-0">
            <a class="px-2 text-gray-300 hover:text-white">Reset Password</a>
        </div>
        <br>
    </div>
</div>
