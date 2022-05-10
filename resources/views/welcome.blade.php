<div>
    @extends('layouts.appIndex')
    @section('content')
{{--        @if(Session()->has('Success'))--}}
{{--            <div class="w-full">--}}
{{--                <span>{{Success('Success')}}</span>--}}
{{--            </div>--}}
{{--            @endif--}}

            {{-- <div class="h-screen bg-indigo-900 md:overflow-hidden"> --}}
            <div class="w-full h-full bg-left bg-cover" 
            style="background-image: url('images/background.jpg');">
                <div class="px-4 py-20 md:py-4">
                    <div class="md:max-w-6xl md:mx-auto">
                        <div class="md:flex md:flex-wrap">
                            <div class="text-center md:w-1/2 md:text-left md:pt-16">
                                <h1 class="mt-10 mb-5 text-2xl font-bold leading-tight text-white md:text-5xl">
                                    Simple and Easy Loan Application
                                </h1>

                                <p class="font-bold text-white md:text-xl md:pr-48">
                                    Welcome to GG loan services, a place where your can get your money like yesterday.
                                </p>

                                <a href="{{route('loanRequest')}}" class="inline-block px-8 py-3 mt-6 mb-12 text-white bg-orange-500 rounded-lg shadow md:mb-0 md:mt-10 hover:bg-orange-600"
                                >Apply Today!</a>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>


@endsection



