<div>
    @if($viewSchedule==false)
    <div class="block w-full overflow-x-auto">
        <table class="items-center bg-transparent w-full border-collapse ">
            <thead>
            <tr>
                <th class="text-left px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Name
                </th>
                <th class="text-left px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Contact number
                </th>
                <th class="text-left px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Email Address
                </th>
                <th class="text-left px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Date
                </th>
                <th class="text-left px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Time
                </th>
            </tr>
            </thead>

            <tbody>
            @forelse($interviewSchedules as $interviewSchedule)
                <tr>
                    <th class="text-left border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        {{$interviewSchedule->loanRequest->fName." ".$interviewSchedule->loanRequest->lName}}
                    </th>
                    <td class="text-left border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                        {{$interviewSchedule->loanRequest->phoneNum}}
                    </td>
                    <td class="text-left border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                        {{$interviewSchedule->loanRequest->email}}
                    </td>
                    <td class="text-left  border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                        {{$interviewSchedule->date}}
                    </td>
                    <td class=" text-left border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                        {{$interviewSchedule->time}}
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                        <form wire:submit.prevent="viewDocument({{$interviewSchedule->loanReqID}})">
                            <a href=""> <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                                    Conduct Interview
                                </button></a>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                        No requests at this time
                    </td>
                </tr>
            @endforelse
            </tbody>

        </table>
    </div>

@elseif($viewDoc==true)

        <div class="block w-full overflow-x-auto">
{{--            --}}

            @if ($successMsg)
                <div class="p-4 mt-8 rounded-md bg-red-50">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <svg class="w-5 h-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                      clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-sm font-medium leading-5 text-green-800">
                                {{ $successMsg }}
                            </p>
                        </div>
                        <div class="pl-3 ml-auto">
                            <div class="-mx-1.5 -my-1.5">
                                <button
                                    type="button"
                                    wire:click="$set('successMsg', null)"
                                    class="inline-flex rounded-md p-1.5 text-green-500 hover:bg-red-100 focus:outline-none focus:bg-green-100 transition ease-in-out duration-150"
                                    aria-label="Dismiss">
                                    <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                              clip-rule="evenodd" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
{{--            --}}
            <table class="items-center bg-transparent w-full border-collapse ">
                <thead>
                <tr>
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Photograph
                    </th>
                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                        Identification
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
{{--                    <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">--}}
{{--                        Status [Valid/InValid]--}}
{{--                    </th>--}}
                </tr>
                </thead>

                <tbody>
{{--                @forelse($loanRequests as $loanRequest)--}}
                    <tr>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                            <a href="{{url('/storage/docs/docs/'.$this->image)}}" target="_blank">View Image</a>
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                            <a href="{{url('/storage/docs/docs/'.$this->identity)}}" target="_blank">View Image</a>
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                            <a href="{{url('/storage/docs/docs/'.$this->trnImg)}}" target="_blank">View Image</a>
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                            <a href="{{url('/storage/docs/docs/'.$this->income)}}" target="_blank">View Image</a>
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                            <a href="{{url('/storage/docs/docs/'.$this->address)}}" target="_blank">View Image</a>
                        </td>
                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 ">
                            {{--                            <form wire:click.prevent="requestInterview({{$this->loanRID}})">--}}
                            {{--                                <a href=""> <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >--}}
                            {{--                                        Request Interview--}}
                            {{--                                    </button></a>--}}
                            {{--                            </form> --}}
                        </td>
                    </tr>
                </tbody>

            </table>
        </div>

        <div class="mt-5 flex justify-items-center justify-center">
            <div class="w-full max-w-xs">
{{--            <form wire:submit.prevent="validateDocs">--}}
                <div class="mb-4">
                    {{--                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">--}}
                    {{--                                        Select--}}
                    {{--                                    </label>--}}
                    <select wire:model="docValidation" id="valid" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <option>select</option>
                        <option value="Valid">Valid</option>
                        <option value="Invalid">Invalid</option>
                    </select>
                    @error('valid')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

{{--                <a href=""> <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >--}}
{{--                        Confirm--}}
{{--                    </button></a>--}}
{{--            </form>--}}
            </div>
        </div>
{{--@elseif($validDocs==true)--}}

    @if($docValidation=="Valid")
        <div class="mt-5 flex justify-items-center justify-center">
            <div class="w-full max-w-xs">
                <form wire:submit.prevent="loanValid({{$this->loanRID}})" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="loanAmt">
                            Loan Amount
                        </label>
{{--                        {{dd($loanAmt)}}--}}
                        <input wire:model="loanAmt" id="loanAmt" type="text" placeholder="$" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('loanAmt')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ "Please enter loan amount." }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="intRate">
                            Interest Rate
                        </label>
                        <input wire:model="intRate" id="intRate" type="text" placeholder="%" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('intRate')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{"Please enter interest amount." }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for=repayPeriod">
                            Repayment Period [year(s)]
                        </label>
                        <input wire:model="repayPeriod" id="repayPeriod" type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @error('repayPeriod')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ "Please select number of repayment year(s)." }}
                        </p>
                        @enderror
                    </div>
                    <hr>
{{--                    <div class="mb-4">--}}
{{--                        <label class="block text-gray-700 text-sm font-bold mb-2" for="payMon">--}}
{{--                            Monthly Payment--}}
{{--                        </label>--}}
{{--                        <input readonly wire:model="payMon" id="payMon" type="text" placeholder="0" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">--}}
{{--                        @error('payMon')--}}
{{--                        <p class="text-red-500 text-xs italic mt-4">--}}
{{--                            {{ $message }}--}}
{{--                        </p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                    <div class="mb-4">--}}
{{--                        <label class="block text-gray-700 text-sm font-bold mb-2" for="totalPay">--}}
{{--                            Interest Rate--}}
{{--                        </label>--}}
{{--                        <input readonly wire:model="totalPay" id="totalPay" type="text" placeholder="0" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">--}}
{{--                        @error('totalPay')--}}
{{--                        <p class="text-red-500 text-xs italic mt-4">--}}
{{--                            {{ $message }}--}}
{{--                        </p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                    <a href=""> <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                            Approve
                        </button></a>
                </form>
            </div>
        </div>
        @elseif($docValidation=="Invalid")
            <div class="mt-5 flex justify-items-center justify-center">
                <div class="w-full max-w-xs">
                    <form wire:submit.prevent="loanInvalid({{$this->loanRID}})" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="totalPay">
                                Comment
                            </label>
                            <textarea wire:model="comment" id="comm" placeholder="comments.." class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                            @error('comment')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ "Please state reason for loan application denial."}}
                            </p>
                            @enderror
                        </div>
                        <a href=""> <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                                Deny
                            </button></a>
                    </form>
                </div>
            </div>
@endif
@endif
</div>
