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
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">

<div>
    <div class="bg-orange-500 px-4 py-4">
        <div
            class="md:max-w-6xl md:mx-auto md:flex md:items-center md:justify-between"
        >
            <div class="flex justify-between items-center">
                <a href="{{url('/')}}" class="inline-block py-2 text-white text-xl font-bold"
                >Amber Loans</a
                >
                <div
                    class="inline-block cursor-pointer md:hidden">
                    <div class="bg-gray-400 w-8 mb-2" style="height: 2px;"></div>
                    <div class="bg-gray-400 w-8 mb-2" style="height: 2px;"></div>
                    <div class="bg-gray-400 w-8" style="height: 2px;"></div>
                </div>
            </div>

            <div>
                <div class="hidden md:block">
                    <a
                        href="{{route('loanRequirement')}}"
                        class="inline-block py-1 md:py-4 text-gray-100 mr-6 font-bold"
                    >Loan Requirement</a
                    >
                    <a
                        href="{{route('contactUs')}}"
                        class="inline-block py-1 md:py-4 text-gray-100 hover:text-gray-100 mr-6"
                    >Contact Us</a
                    >

                </div>
            </div>
{{--            <div class="hidden md:block">--}}
{{--                <a--}}
{{--                    href="#"--}}
{{--                    class="inline-block py-1 md:py-4 text-gray-100 hover:text-gray-100 mr-6"--}}
{{--                >Login</a--}}
{{--                >--}}
{{--                <a--}}
{{--                    href="#"--}}
{{--                    class="inline-block py-2 px-4 text-gray-700 bg-white hover:bg-gray-100 rounded-lg"--}}
{{--                >Sign Up</a--}}
{{--                >--}}
{{--            </div>--}}
        </div>
    </div>
</div>

@yield('content')


{{--        Footer--}}

<p class="text-center text-gray-600 ">
    <!-- component -->
    <script src="https://kit.fontawesome.com/4db6b32bd3.js" crossorigin="anonymous"></script>
<div class="w-full bg-green-900 text-white">
    <div class="xl:px-40 pb-12 lg:px-20 md:px-10 sm:px-5 px-10">
        <div class="w-full pt-12 flex flex-col sm:flex-row space-y-2  justify-start">
            <div class="w-full sm:w-2/5 pr-6 flex flex-col space-y-4">
                {{--                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="160" height="57" viewBox="0 0 160 57">--}}
                {{--                        <defs>--}}
                {{--                            <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 197 70">--}}
                <image width="197" height="70" src="/images/logo.png"/>
                {{--                            </pattern>--}}
                {{--                        </defs>--}}
                {{--                        <rect id="ETI-Logo" width="160" height="57" fill="url(#pattern)"/>--}}
                {{--                    </svg>--}}
                <p class="opacity-60">2021 Awesome Street, Kingston 7
                    Kingston, Jamaica.</p>
            </div>
            <div class="w-full sm:w-1/5 flex flex-col space-y-4">
                <a class="opacity-60">About Us</a>
                <a class="opacity-60">Responsibilities</a>
                <a class="opacity-60">Our Services</a>
                <a class="opacity-60">Contact</a>
            </div>
            <div class="w-full sm:w-1/5 flex flex-col space-y-4">
                <a class="opacity-60">Disclaimer</a>
                <a class="opacity-60">Testimonials</a>
                <a class="opacity-60">Privacy Policy</a>
                <a class="opacity-60">Terms of Service</a>
            </div>
            <div class="w-full sm:w-1/5 pt-6 flex items-end mb-1">
                <div class="flex flex-row space-x-4">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-google"></i>
                </div>
            </div>
        </div>
        <div class="opacity-60 pt-2">
            <p>© 2021 Amber Loan Services Intl.</p>
        </div>
    </div>
</div>


@livewireScripts
</body>
</html>












{{--    <div id="app">--}}
{{--        <header class="bg-blue-900 py-6">--}}
{{--            <div class="container mx-auto flex justify-between items-center px-6">--}}
{{--                <div>--}}
{{--                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">--}}
{{--                        {{ config('app.name', 'Laravel') }}--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">--}}
{{--                    @guest--}}
{{--                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                        @if (Route::has('register'))--}}
{{--                            <a class="no-underline hover:underline" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        <span>{{ Auth::user()->name }}</span>--}}

{{--                        <a href="{{ route('logout') }}"--}}
{{--                           class="no-underline hover:underline"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">--}}
{{--                            {{ csrf_field() }}--}}
{{--                        </form>--}}
{{--                    @endguest--}}
{{--                </nav>--}}
{{--            </div>--}}
{{--        </header>--}}
