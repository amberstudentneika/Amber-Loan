<div>
@extends('layouts.appIndex')
    @section('content')

        <div class="w-full bg-cover md:overflow-hidden"
        style="background-image: linear-gradient(rgba(27, 56, 218, 0.9), rgba(16, 36, 145, 0.9)), url('../images/check.jpg');">
            <div class="px-20 py-20 md:py-4">
                <div class="md:max-w-6xl md:mx-auto">
                    <div class="text-left md:w-1/2 md:text-left md:pt-16">
                                <h1 class="mb-4 text-2xl font-bold leading-tight text-white md:text-5xl">
                                    UNSECURED LOAN CHECKLIST
                                </h1>

                                <ul class="space-y-6 font-semibold text-white list-disc md:text-xl">
                                    <li>Job Letter stating salary, position, length of employment; plus last two months pay slips</li>
                                    <li>Print out of savings/current account transactions for at least 6 months OR updated bank book (if required)</li>
                                    <li>Tax Registration Number (TRN) Card</li>
                                    <li>Valid ID (Driver’s Licence, Voter’s ID, Passport)</li>
                                    <li>Passport size photograph</li>
                                    <li>Completed Application Form with contact information of two relatives & two references (non-related)</li>
                                    <li>Recent utility or any other bill in member’s name with current address (Proof of Address)</li>
                                    <li>Supporting documents for stated purpose of loan **CONDITIONS APPLY</li>
                                </ul>

                                <a href="{{route('loanRequest')}}" class="inline-block px-8 py-3 mt-6 mb-12 text-white bg-orange-500 rounded-lg shadow md:mb-0 md:mt-10 hover:bg-orange-600"
                                >Apply Today!</a>
                            </div>
                    </div>
                </div>
               
            </div>

@endsection








