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
    @livewireStyles
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-indigo-900 py-8">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
{{--                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">--}}
{{--                        {{ config('app.name', 'Laravel') }}--}}
{{--                    </a>--}}
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">

{{--                        <span>{{ Auth::user()->fName." ".Auth::user()->lName }}</span>--}}
{{--                <a href="{{ route('viewLoanRequest') }}">loan request(s)</a>--}}
{{--                <a href="{{ route('viewInterviewSchedule') }}">Interview</a>--}}
{{--                <a href="{{ route('viewLoan') }}">Loan</a>--}}


{{--                        <a href="{{ route('logout') }}"--}}
{{--                           class="no-underline hover:underline"--}}
{{--                           onclick="event.preventDefault();--}}
{{--                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>--}}
{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">--}}
{{--                            {{ csrf_field() }}--}}
{{--                        </form>--}}
                </nav>
            </div>
        </header>

{{--        start--}}
        <div class="min-h-screen flex">
            <div class="py-12 px-10 w-1/4">
                <div class="flex space-2 items-center border-b-2 pb-4">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-indigo-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h1 class="text-3xl font-bold text-orange-500">AMBER FINANCE</h1>
                    </div>
                </div>
                <div class="flex items-center space-x-4 mt-6 p-2 bg-indigo-900 rounded-md">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 10a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-lg text-white font-semibold">Dashboard</p>
                    </div>
                </div>
                <div class="mt-8">
                    <ul class="space-y-10">
                        <li>
                            <a href="{{route('home')}}" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                                </svg>
                                Activity</a
                            >
                        </li>
                        <li>
                            <a href="{{ route('viewLoanRequest') }}" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                </svg>
                                Loan Request(s)</a
                            >
                        </li>
                        {{--                            <li>--}}
                        {{--                                <a href="#" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>--}}
                        {{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" viewBox="0 0 20 20" fill="currentColor">--}}
                        {{--                                        <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />--}}
                        {{--                                    </svg>--}}
                        {{--                                    Security</a--}}
                        {{--                                >--}}
                        {{--                            </li>--}}
                        <li>
                            <a href="{{ route('viewInterviewSchedule') }}" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                Interview(s)</a
                            >
                        </li>
                        <li>
                            <a href="{{ route('viewLoan') }}" class="flex items-centerx text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Loan</a
                            >
                        </li>
                        {{--                            <li>--}}
                        {{--                                <a href="#" class="flex items-center text-sm font-semibold text-gray-500 hover:text-indigo-600 transition duration-200" hover:text-indigo-600>--}}
                        {{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
                        {{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />--}}
                        {{--                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />--}}
                        {{--                                    </svg>--}}
                        {{--                                    Settings</a--}}
                        {{--                                >--}}
                        {{--                            </li>--}}
                    </ul>
                </div>

                <div class="flex mt-20 space-x-4 items-center">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                    </div>
                    <a href="{{ route('logout') }}"
                       class="block font-semibold text-gray-500 hover:text-indigo-600 transition duration-200"
                       onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
            <div class="bg-indigo-50 flex-grow py-12 px-10">
        @yield('content')

                <div></div>
                <div></div>
            </div>
        </div>
{{--                end--}}
    </div>
    @livewireScripts
</body>
</html>
