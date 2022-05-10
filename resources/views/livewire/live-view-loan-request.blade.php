<div>
    @if($viewLoanRequest==false)
    <div class="block w-full overflow-x-auto">
        <table class="items-center w-full bg-transparent border-collapse ">
            <thead>
            <tr>
                <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                    First Name
                </th>
                <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                    Last Name
                </th>
                <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                    Gender
                </th>
                <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                    Address
                </th>
                <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                    Email
                </th>
                <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                    Contact number
                </th>
                <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                    Requested amount
                </th>
                <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                    Action
                </th>
            </tr>
            </thead>

            <tbody>
            @forelse($loanRequests as $loanRequest)
                <tr>
                  <th class="p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap text-blueGray-700 ">
                        {{$loanRequest->fName}}
                    </th>
                    <th class="p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap text-blueGray-700 ">
                        {{$loanRequest->lName}}
                    </th>
                    <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap ">
                        {{$loanRequest->gender}}
                    </td>
                    <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap ">
                        {{$loanRequest->homeAddress}}
                    </td>
                    <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap ">
                        {{$loanRequest->email}}
                    </td>
                    <td class="p-4 px-6 text-xs text-center align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap ">
                        {{$loanRequest->phoneNum}}
                    </td>
                    <td class="p-4 px-6 text-xs text-center align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                        {{$loanRequest->amount}}
                    </td>
                    <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap ">
                        <form wire:click.prevent="viewDocument({{$loanRequest->id}})">
                        <a href=""> <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" >
                                View Documents
                            </button></a>
                        </form>
                    </td>
                </tr>
            @empty
                <tr >
                    <td colspan="7" class="p-4 px-6 text-xs text-center border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                        No request(s) at this time
                    </td>
                </tr>
            @endforelse
            </tbody>

        </table>
    </div>
@elseif($viewLoanRequestDocs==true)
        <div class="block w-full overflow-x-auto">
            <table class="items-center w-full bg-transparent border-collapse ">
                <thead>
                <tr>
                    <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                        Photograph
                    </th>
                    <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                        Identification
                    </th>
                    <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                        TRN
                    </th>
                    <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                        POI
                    </th>
                    <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                        POA
                    </th>
                    <th class="px-6 py-3 text-xs font-semibold text-left uppercase align-middle border border-l-0 border-r-0 border-solid bg-blueGray-50 text-blueGray-500 border-blueGray-100 whitespace-nowrap">
                        Request Interview
                    </th>
                </tr>
                </thead>

                <tbody>
                @forelse($loanRequests as $loanRequest)
                    <tr>
                        <td class="p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap text-blueGray-700 ">
                            <a href="{{url('/storage/docs/LoanRequest/'.$this->image)}}" target="_blank">View Image</a>
                        </td>
                        <td class="p-4 px-6 text-xs text-left align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap text-blueGray-700 ">
                            <a href="{{url('/storage/docs/LoanRequest/'.$this->identity)}}" target="_blank">View Image</a>
                        </td>
                        <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap ">
                            <a href="{{url('/storage/docs/LoanRequest/'.$this->trnImg)}}" target="_blank">View Image</a>
                        </td>
                        <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap ">
                            <a href="{{url('/storage/docs/LoanRequest/'.$this->income)}}" target="_blank">View Image</a>
                        </td>
                        <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap ">
                            <a href="{{url('/storage/docs/LoanRequest/'.$this->address)}}" target="_blank">View Image</a>
                        </td>
                        <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap ">
{{--                            <form wire:click.prevent="requestInterview({{$this->loanRID}})">--}}
{{--                                <a href=""> <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" >--}}
{{--                                        Request Interview--}}
{{--                                    </button></a>--}}
{{--                            </form> --}}
                            <form wire:click.prevent="createInterview({{$this->loanRID}})">
                                <a href=""> <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" >
                                        Create Interview
                                    </button></a>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="p-4 px-6 text-xs align-middle border-t-0 border-l-0 border-r-0 whitespace-nowrap">
                            No requests at this time
                        </td>
                    </tr>
                @endforelse
                </tbody>

            </table>
        </div>
        @elseif($scheduleInterview==true)
<div  class="h-screen bg-indigo-900 bg-cover">
        <div class="md:overflow-hidden">
            <div class="flex justify-center mt-5 justify-items-center">
                <div class="w-full max-w-xs">
                    <form wire:submit.prevent="scheduledInterview" class="px-8 pt-6 pb-8 mt-10 mb-4 bg-white rounded shadow-md">
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="date">
                                Date
                            </label>
                            <input wire:model="date" id="date" type="date" placeholder="" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                            @error('date')
                            <p class="mt-4 text-xs italic text-red-500">
                                {{ "Select a future date." }}
                            </p>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label class="block mb-2 text-sm font-bold text-gray-700" for="time">
                                Time
                            </label>
                            <input wire:model="time" id="time" type="time"  class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                            @error('time')
                            <p class="mt-4 text-xs italic text-red-500">
                                {{ "The interview time is required." }}
                            </p>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" >
                                Schedule Interview
                            </button>
                            <button wire:click="back" type="button" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" >
                                Back
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>
    @endif()
</div>
