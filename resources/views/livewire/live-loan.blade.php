<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
@if($viewMode==false)
    <div class="bg-indigo-900 bg-cover">
        <div class=" md:overflow-hidden">
            <div class="mt-5 flex justify-items-center justify-center">
                <div class="w-full max-w-xs">
                    <form wire:submit.prevent="viewProfile({{$loanCandidate}})" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="can">
                                Candidate
                            </label>
                            <select wire:model="loanCandidate" id="can" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                <option>Select Candidate</option>
                                @forelse($candidates as $candidate)
                                <option value="{{$candidate->id}}">{{$candidate->fName." ".$candidate->lName}}</option>
                                @empty
                                    <option>NO candidate available</option>
                                @endforelse
                            </select>
                            @error('loanCandidate')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>


                        @if(sizeof($loanInfos)!=0)
                            @foreach($loanInfos as $loanInfo)
{{--                            <div class="mb-4">--}}
{{--                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">--}}
{{--                                    Name--}}
{{--                                </label>--}}
{{--                                <input readonly value="{{$loanInfo->loanRequest->fName." ".$loanInfo->loanRequest->lName}}" id="name" type="text"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">--}}
{{--                            </div>--}}
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Loan Amount
                                </label>
                                <input readonly value="{{$loanInfo->loanAmt}}" id="name" type="text"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Period
                                </label>
                                <input readonly value="{{$loanInfo->repayPeriod}}" id="name" type="text"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Interest Rate
                                </label>
                                <input readonly value="{{$loanInfo->intRate}}" id="name" type="text"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                        <div>
                            <hr>
                        </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Monthly Payment
                                </label>
                                <input readonly value="{{$loanInfo->monthPay}}" id="name" type="text"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" >
                                    Total Payment
                                </label>
                                <input readonly value="{{$loanInfo->totalRepAmt}}" id="name" type="text"  class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                            </div>

                                @endforeach
                                <div class="flex items-center justify-between">
                                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                                    View Profile
                                </button>
                            </div>
                            @endif


                    </form>
                </div>
            </div>
        </div>
    </div>

@elseif($viewCandidateInfo==true)
    <div class="bg-indigo-900 md:overflow-hidden">
        <section class="relative block h-72">
            <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
                <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
                    <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
        <section class="relative py-16 bg-blueGray-200">
            <div class="container mx-auto px-4">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
                    <div class="px-6">
                        <div class="flex flex-wrap justify-center">
                            <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
{{--                                <div class="relative">--}}
{{--                                    <img alt="passport size photo" src="https://demos.creative-tim.com/notus-js/assets/img/team-2-800x800.jpg" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">--}}
{{--                                </div>--}}
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                <div class="py-6 px-3 mt-32 sm:mt-0">
{{--                                    <button wire:click="" type="button" class="bg-indigo-900 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" >--}}
{{--                                        back--}}
{{--                                    </button>--}}
                                </div>
                            </div>
                            <div class="w-full lg:w-4/12 px-4 lg:order-1"> </div>
                        </div>
                        @foreach($doc as $docs)
                        <div class="text-center mt-12">
                            <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                                {{$docs->loanRequest->fName." ".$docs->loanRequest->lName}}
                            </h3>
                            <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                Address: {{$docs->loanRequest->homeAddress}}
                            </div>
                            <div class="mb-2 text-blueGray-600 mt-10">
                                <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
                                Gender: {{$docs->loanRequest->gender}}
                            </div>
                            <div class="mb-2 text-blueGray-600 mt-10">
                                <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
                                Email Address: {{$docs->loanRequest->email}}
                            </div>
                            <div class="mb-2 text-blueGray-600">
                                <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
                                Phone Number: {{$docs->loanRequest->phoneNum}}
                            </div>
                        </div>
                        <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                            <div class="flex flex-wrap justify-center">
                                <div class="w-full lg:w-9/12 px-4">
                                    <div class="mb-4 text-lg leading-relaxed text-blueGray-700">


                                    <table class="items-center bg-transparent w-full border-collapse ">
                                        <thead>
                                        <tr>
                                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                Photograph
                                            </th>
                                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                ID
                                            </th>
                                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                TRN
                                            </th>
                                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                POI
                                            </th>
                                            <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                                POA
                                            </th>

                                        </tr>
                                        </thead>

                                        <tbody>

                                            <tr>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                                    <a href="{{url('/storage/docs/LoanRequest/'.$docs->image)}}" target="_blank">View Image</a>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                                    <a href="{{url('/storage/docs/LoanRequest/'.$docs->identification)}}" target="_blank">View Image</a>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                                    <a href="{{url('/storage/docs/LoanRequest/'.$docs->trnImg)}}" target="_blank">View Image</a>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                                    <a href="{{url('/storage/docs/LoanRequest/'.$docs->poi)}}" target="_blank">View Image</a>
                                                </td>
                                                <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                                                    <a href="{{url('/storage/docs/LoanRequest/'.$docs->poa)}}" target="_blank">View Image</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                        <form wire:click="back">
                                            <a href=""> <button type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                                                    Back
                                                </button></a>
                                        </form>
                                </div>







                                    </div>

                                </div>

                            </div>
{{--                            <div class="py-6 px-3 mt-32 sm:mt-0">--}}
{{--                                <form wire:submit.prevent="submitLoanRequest()">--}}
{{--                                    <button  type="submit" class="bg-indigo-900 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" >--}}
{{--                                        Submit--}}
{{--                                    </button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>


        </section>

    </div>
@endforeach
    @endif

</div>
