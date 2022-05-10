@extends('layouts.app')

@section('content')


{{--                    start of body--}}

                    <div class="flex justify-between">
                        <div>
                            <h4 class="text-sm font-bold text-indigo-600">Hi {{Auth::user()->fName}},</h4>
                            <h1 class="text-4xl font-bold text-indigo-900 mt-">Welcome Back!</h1>
                        </div>
                    </div>
                    <div>
                        <div class="flex space-x-10">
                            <div class="flex items-center justify-around w-64 p-6 mt-10 space-x-2 bg-white shadow-lg rounded-md">
                                <div>
                                    <span class="text-sm font-semibold text-gray-400">Total Loan Request(s)</span>
                                    <h1 class="text-2xl font-bold text-indigo-400">{{$loanReq}}</h1>
                                </div>
                                <div>
                                    <a href="{{ route('viewLoanRequest') }}"><svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 11l7-7 7 7M5 19l7-7 7 7" />
                                    </svg></a>
                                </div>
                            </div>
                            <div class="flex items-center justify-around w-64 p-6 mt-10 space-x-2 bg-white shadow-lg rounded-md">
                                <div>
                                    <span class="text-sm font-semibold text-gray-400">Scheduled</span>
                                    <h1 class="text-2xl font-bold text-indigo-400">{{$totalScheduled}}</h1>
                                    <span class="text-sm font-semibold text-gray-400">Interviewed</span>
                                    <h1 class="text-2xl font-bold text-indigo-400">{{$totalInterviewed}}</h1>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-600" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex items-center justify-around w-64 p-6 mt-10 space-x-2 bg-white shadow-lg rounded-md">
                                <div>
                                    <span class="text-sm font-semibold text-gray-400">Total Approved Loan(s)</span>
                                    <h1 class="text-2xl font-bold text-indigo-400">{{$appLoan}}</h1>
                                    <span class="text-sm font-semibold text-gray-400">Total Denied Loan(s)</span>
                                    <h1 class="text-2xl font-bold text-red-400">{{$denLoan}}</h1>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="flex mt-10 space-x-10">
                            <div class="flex items-center justify-around w-2/3 p-8 bg-white shadow-lg rounded-md">
                                <div class="space-y-2">
                                    <h3 class="text-sm font-semibold text-gray-400">Total Loan Application Reviewed</h3>
                                    <h1 class="text-4xl font-bold text-indigo-400">{{$totalRev}}</h1>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-40 h-40 text-indigo-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div></div>
                        <div></div>
                    </div>
{{--start--}}
{{--                    <div></div>--}}
{{--                    <div></div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--end--}}
@endsection
