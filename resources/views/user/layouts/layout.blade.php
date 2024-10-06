<!DOCTYPE html>
<html lang="en" class="dark">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{asset('assets/images/logo_a.svg')}}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="hdj">
        <meta name="keywords" content="hdj">
        <meta name="author" content="Hamad Fauzi Jessar">
        <title>@yield('title', 'HFJ')</title>
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        <!-- BEGIN: CSS Assets-->
        {{-- <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" /> --}}
        @yield('style')
        <!-- END: CSS Assets-->
        @vite('resources/css/app.css')
    </head>

    <style>
        body { 
            background-color: #E9EEF4;
            font-family: aptly, sans-serif;
        }

    </style>

    <style>
        .gradient-text {
        background: linear-gradient(to right, #bfdbfe, #60a5fa); /* blue-200 to blue-400 */
        -webkit-background-clip: text;
        color: transparent;
        }
    
        .gradient-text2 {
        background: linear-gradient(to right, #60A5FA, #2563EB);
        -webkit-background-clip: text;
        color: transparent;
        }
    
        .btn-explore:hover{
        background: linear-gradient(to right, #bfdbfe, #60a5fa); /* blue-200 to blue-400 */
        color: white;
        }
    
        .pseudo-element-left,
        .pseudo-element-right {
            position: absolute;
            height: 32px; /* Tinggi dari bagian yang ingin disembunyikan */
            background-color: white; /* Warna yang sama dengan latar belakang */
        }
    
        .pseudo-element-left {
            left: 0;
            bottom: -16px; /* Sesuaikan dengan tinggi yang ingin disembunyikan */
            right: 50%; /* Menutupi setengah dari lebar */
            border-radius: 0 0 0px 64px; /* Sesuaikan dengan radius yang diinginkan */
        }
    
        .pseudo-element-right {
            right: 0;
            bottom: -16px; /* Sesuaikan dengan tinggi yang ingin disembunyikan */
            left: 50%; /* Menutupi setengah dari lebar */
            border-radius: 0 0 64px ; /* Sesuaikan dengan radius yang diinginkan */
    
        }
    
        .underline-custom {
            width: 20px;
            height: 8px;
            background-color: #4A90E2;
            margin: 0 auto;
            border-radius: 10px;
        }
    
    </style>

    <style>
        .toggle {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 30px;
        }
        .toggle input {
            opacity: 0;
            width: 0;
            height: 0;
            z-index: -1;
        }

        .toggle input {
            position: absolute;
            z-index: -1; /* Make sure the input is behind everything else */
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
            z-index: 1;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: #2b3945;
        }
        input:checked + .slider:before {
            transform: translateX(30px);
        }
        .icon {
            position: absolute;
            top: 5px;
            width: 20px;
            height: 20px;
            transition: .4s;
        }
        .moon-icon {
            left: 5px;
        }
        .sun-icon {
            right: 5px;
        }
        /* Light mode */
        .toggle .moon-icon {
            color: #718096;
        }
        .toggle .sun-icon {
            color: #f59e0b;
        }
        /* Dark mode */
        .toggle.dark-mode .slider {
            background-color: #2b3945;
        }
        .toggle.dark-mode .moon-icon {
            color: #f59e0b;
        }
        .toggle.dark-mode .sun-icon {
            color: #718096;
        }
    </style>
    
<body class="flex flex-col gap-4 mx-48 min-w-[100vh] mb-4">
 
    @include('user.layouts.partials.header')

    @yield('content')

    @include('user.layouts.partials.footer')

  @yield('script')

    
</body>

</html>
