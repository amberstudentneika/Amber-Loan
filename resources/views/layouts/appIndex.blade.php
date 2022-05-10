<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Alpine Js -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- tmp -->
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
{{--new footet--}}
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:wght@200|Baloo+Tamma+2|Roboto&display=swap"
          rel="stylesheet">
    @livewireStyles
</head>
<body class="h-screen font-sans antialiased leading-none bg-gray-100">

<div>
            <nav class="px-4 py-4 bg-white">
                <div class="max-w-6xl px-4 mx-auto">
                    <div class="flex justify-between">
                        <div class="flex space-x-7">
                            <div>
                                <!-- Website Logo -->
                                <a href="{{url('/')}}" class="flex items-center px-2 py-4">
                                    {{-- <img src="images/logo.png" alt="Logo" class="h-8 mr-2 w-120"> --}}
                                    <span class="text-xl font-bold text-gray-600">GG Loan Services</span>
                                </a>
                            </div>
                            <!-- Primary Navbar items -->
                            {{-- <div class="items-center hidden space-x-1 md:flex">
                                <a href="" class="px-2 py-4 font-semibold text-blue-500 border-b-4 border-blue-500 ">Home</a>
                                <a href="" class="px-2 py-4 font-semibold text-gray-500 transition duration-300 hover:text-blue-500">Services</a>
                                <a href="" class="px-2 py-4 font-semibold text-gray-500 transition duration-300 hover:text-blue-500">About</a>
                                <a href="" class="px-2 py-4 font-semibold text-gray-500 transition duration-300 hover:text-blue-500">Contact Us</a>
                            </div> --}}
                        </div>
                        <!-- Secondary Navbar items -->
                        <div class="items-center hidden space-x-3 md:flex ">
                            <a href="{{route('loanRequirement')}}" class="px-2 py-4 font-bold text-gray-600 transition duration-300 hover:bg-orange-400 hover:text-white">Loan Requirements</a>
                            <a href="{{route('contactUs')}}" class="px-2 py-4 font-semibold text-gray-600 transition duration-300 hover:bg-orange-400 hover:text-white">Contact us</a>
                        </div>
                        <!-- Mobile menu button -->
                        <div class="flex items-center md:hidden">
                            <button class="outline-none mobile-menu-button">
                            <svg class="w-6 h-6 text-gray-600 hover:text-orange-500"
                                x-show="!showMenu"
                                fill="none"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                            >
                                <path d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                        </button>
                        </div>
                    </div>
                </div>
                <!-- mobile menu -->
                <div class="hidden mobile-menu">
                    <ul class="">
                        <li><a href="{{route('loanRequirement')}}" class="block px-2 py-4 text-sm font-bold text-gray-600 transition duration-300 hover:bg-gray-200">Loan Requirements</a></li>
                        <li><a href="{{route('contactUs')}}" class="block px-2 py-4 text-sm font-semibold text-gray-600 transition duration-300 hover:bg-gray-200">Contact Us</a></li>
                    </ul>
                </div>
                <script>
                    const btn = document.querySelector("button.mobile-menu-button");
                    const menu = document.querySelector(".mobile-menu");
    
                    btn.addEventListener("click", () => {
                        menu.classList.toggle("hidden");
                    });
                </script>
            </nav>
</div>
    </div>
</div>

@yield('content')

<script src="https://kit.fontawesome.com/4db6b32bd3.js" crossorigin="anonymous"></script>
<div class="w-full text-white bg-green-900">
    <div class="px-10 pb-12 xl:px-40 lg:px-20 md:px-10 sm:px-5">
        <div class="flex flex-col justify-start w-full pt-12 space-y-2 sm:flex-row">
            <div class="flex flex-col w-full pr-6 space-y-4 sm:w-2/5">
               {{-- <image width="197" height="70" src="/images/logo.png"/> --}}
               <p class="font-bold opacity-60">GG Loan Services</p>
               <p class="opacity-60">2021 Awesome Street, Kingston 7</p>
                <p>  Kingston, Jamaica.</p>
            </div>
            <div class="flex flex-col w-full space-y-4 sm:w-1/5">
                <a class="opacity-60" href="#">About Us</a>
                <a class="opacity-60" href="#">Responsibilities</a>
                <a class="opacity-60" href="#">Our Services</a>
            </div>
            <div class="flex flex-col w-full space-y-4 sm:w-1/5">
                <a class="opacity-60" href="#">Contact Us</a>
                <a class="opacity-60" href="#">Join Us</a>
                <a class="opacity-60" href="#">Stakeholders</a>
            </div>
            <div class="flex flex-col w-full space-y-4 sm:w-1/5">
                <a class="opacity-60" href="#">Disclaimer</a>
                <a class="opacity-60" href="#">Testimonials</a>
                <a class="opacity-60" href="#">Privacy Policy</a>
            </div>
            <div class="flex items-end w-full pt-6 mb-1 sm:w-1/5">
               <div class="flex flex-row space-x-4">
                    <a href="#">  <i class="fab fa-facebook-f"></i> </a>
                    <a href="#">   <i class="fab fa-twitter"></i></a>
                    <a href="#">   <i class="fab fa-instagram"></i></a>
                    <a href="#">   <i class="fab fa-google"></i></a>
                </div>
            </div>
        </div>
    </div>
   <hr class="border-green-400">
    
    {{-- signature --}}
    <hr >
    <div class="flex items-center justify-center py-4">
        <p class="mt-2 text-white leadind-none text-ms focus:outline-none lg:text-sm">Designed by Shaneika Lewis</p>
    </div>
</div>





@livewireScripts
</body>
</html>









