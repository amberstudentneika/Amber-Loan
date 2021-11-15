<div>
    @if($addMode==false)

    <div class="bg-indigo-900 bg-cover md:overflow-hidden">
        <div class="mt-5 flex justify-items-center justify-center">
        <div class="w-full max-w-xs">
            <form wire:submit.prevent="personalInfo" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="trn">
                        Trn
                    </label>
                    <input wire:model="trn" id="trn" type="text" placeholder="" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('trn')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="fname">
                       First Name
                    </label>
                    <input wire:model="firstname" id="fname" type="text" placeholder="Shana" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('firstname')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Last Name
                    </label>
                    <input wire:model="lastname" id="name" type="text" placeholder="Lewis" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('lastname')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                        Gender
                    </label>
                    <select wire:model="gender" id="gender" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option>Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                    @error('gender')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="mail">
                        Email address
                    </label>
                    <input wire:model="mail" id="mail" type="email" placeholder="Lewis@gmail.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('mail')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="num">
                        Phone Number
                    </label>
                    <input wire:model="tel" id="num" type="tel" placeholder="876-362-4898" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('tel')
                    <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="home">
                        Home Address
                    </label>
                    <input wire:model="homeAddress" id="home" type="text" placeholder="Lewis@gmail.com" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('homeAddress')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="amt">
                        Desired Loan Amount
                    </label>
                    <input wire:model="loanAmt" id="amt" type="text" placeholder="70000" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @error('loanAmt')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" >
                        Next
                    </button>
                </div>
            </form>
        </div>
    </div>
        </div>
@elseif($addDocMode==true)

        <div class="bg-indigo-900 md:overflow-hidden">
            <div class="mt-5 flex justify-items-center justify-center">
            <div class="w-full max-w-xs">
{{--               @if($show==false)--}}
{{--                    @if($trnImg)--}}
{{--                    <p>Photo Preview:</p>--}}
{{--                    <img src="{{ $trnImg->temporaryUrl() }}">--}}
{{--                    @endif--}}
{{--                    @elseif($identity)--}}
{{--                        <p>Photo Preview:</p>--}}
{{--                        <img src="{{ $identity->temporaryUrl() }}">--}}
{{--                    @endif--}}
{{--                    @if($image)--}}
{{--                        <p>Photo Preview:</p>--}}
{{--                        <img src="{{ $image->temporaryUrl() }}">--}}
{{--                    @endif--}}
{{--                    @if($income)--}}
{{--                        <p>Photo Preview:</p>--}}
{{--                        <img src="{{ $income->temporaryUrl() }}">--}}
{{--                    @endif--}}
{{--                    @if($address)--}}
{{--                        <p>Photo Preview:</p>--}}
{{--                        <img src="{{ $address->temporaryUrl() }}">--}}
{{--                    @endif--}}
{{--                @endif  --}}
                <form wire:submit.prevent="personalDocs" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="trnIm">
                            TRN
                        </label>
                        <input wire:model="trnImg" id="trnIm" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <div wire:loading wire:target="trnImg"><span class="text-indigo-900">uploading..</span></div>
                        @error('trnImg')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="identity">
                            ID
                        </label>
                        <input wire:model="identity" id="identity" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <div wire:loading wire:target="identity"><span class="text-indigo-900">uploading..</span></div>
                        @error('identity')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="image">
                            Passport size photo
                        </label>
                        <input wire:model="image" id="image" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <div wire:loading wire:target="image"><span class="text-indigo-900">uploading..</span></div>
                        @error('image')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="income">
                            Proof of income
                        </label>
                        <input wire:model="income" id="income" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <div wire:loading wire:target="income"><span class="text-indigo-900">uploading..</span></div>
                        @error('income')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                            Proof of address
                        </label>
                        <input wire:model="address" id="address" type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        <div wire:loading wire:target="address"><span class="text-indigo-900">uploading..</span></div>
                        @error('address')
                        <p class="text-red-500 text-xs italic mt-4">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button wire:click="back" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Back
                        </button>
                        <button wire:click="view" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                            Review
                        </button>

                    </div>
                </form>
            </div>
        </div>
        <div class="flex justify-items-center justify-center">
        </div>
        </div>
@elseif($viewMode==true)
        <div class="bg-indigo-900 md:overflow-hidden">
            <!-- component -->

{{--            <main class="profile-page">--}}
                <section class="relative block h-72">
{{--                    <div class="absolute top-0 w-full h-full bg-center bg-cover" style="--}}
          {{--  background-image: url('https://images.unsplash.com/photo-1499336315816-097655dcfbda?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=2710&amp;q=80');--}}
          {{--">--}}
          {{--              <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>--}}
{{--                 </div>--}}
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
{{--                                    <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">--}}
{{--                                        <div class="relative">--}}
{{--                                            <img alt="passport size photo" src="/storage/docs/LoanRequest/.'{{$image}}'" class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16 max-w-150-px">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
                                        <div class="py-6 px-3 mt-32 sm:mt-0">

                                        </div>
                                    </div>
                                    <div class="w-full lg:w-4/12 px-4 lg:order-1"> </div>
                                </div>
                                <div class="text-center mt-12">
                                    <h3 class="text-4xl font-semibold leading-normal mb-2 text-blueGray-700 mb-2">
                                        {{ucfirst($firstname)." ".ucfirst($lastname)}}
                                    </h3>
                                    <div class="text-sm leading-normal mt-0 mb-2 text-blueGray-400 font-bold uppercase">
                                        <i class="fas fa-map-marker-alt mr-2 text-lg text-blueGray-400"></i>
                                        Address: {{ucfirst($homeAddress)}}
                                    </div>
                                    <div class="mb-2 text-blueGray-600 mt-10">
                                        <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
                                        Gender: {{ucfirst($gender)}}
                                    </div>
                                    <div class="mb-2 text-blueGray-600 mt-10">
                                        <i class="fas fa-briefcase mr-2 text-lg text-blueGray-400"></i>
                                        Email Address: {{$mail}}
                                    </div>
                                    <div class="mb-2 text-blueGray-600">
                                        <i class="fas fa-university mr-2 text-lg text-blueGray-400"></i>
                                        Phone Number: {{$tel}}
                                    </div>
                                </div>
                                <div class="mt-10 py-10 border-t border-blueGray-200 text-center">
                                    <div class="flex flex-wrap justify-center">
                                        <div class="w-full lg:w-9/12 px-4">
                                            <p class="mb-4 text-lg leading-relaxed text-blueGray-700">
                                                I <b>{{ucfirst($firstname)." ".ucfirst($lastname)}}</b> is requesting to borrow a loan amount of
                                                <b>${{$loanAmt}}</b>. I thereby attest that all information provided
                                                is accurate and also understand to providing false documents is a criminal
                                                offense that will result in my application being denied. I also understand that
                                                the submission of this form is a digital signature to confirm that the information
                                                provided is valid.
                                            </p>
{{--                                            <a href="#" class="font-normal text-pink-500">Show more</a>--}}
                                        </div>

                                    </div>
                                    <div class="py-6 px-3 mt-32 sm:mt-0">
                                        <form wire:submit.prevent="submitLoanRequest()">
                                        <button  type="submit" class="bg-green-900 active:bg-green-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" >
                                            Submit
                                        </button>
                                            <button wire:click="edit" type="button" class="bg-indigo-900 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1 ease-linear transition-all duration-150" >
                                                Edit
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
{{--            </main>--}}
        </div>
        @endif

</div>
