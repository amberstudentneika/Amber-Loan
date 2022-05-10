<div>
    @if($addMode==false)

    <div class="w-full h-full bg-cover "
    style="background-image: url('../images/bg.jpg')">
        <div class="flex justify-center justify-items-center">
        <div class="mb-20">
            <form wire:submit.prevent="personalInfo" class="px-10 pt-6 pb-8 mt-20 mb-4 bg-white rounded shadow-md ">
                <h1 class="pb-10 text-sm font-bold text-center text-gray-700">Please ensure that the information provided below is correct before submitting.</h1>
                <div class="grid grid-cols-2 gap-x-20 sm:grid-cols-2 ">
              <div class=""> 
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="trn">
                        Trn
                    </label>
                    <input wire:model="trn" id="trn" type="text" pattern="[0-9]{3}-[0-9]{3}-[0-9]{3}" placeholder="xxx-xxx-xxx" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-400 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    @error('trn')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="fname">
                       First Name
                    </label>
                    <input wire:model="firstname" id="fname" type="text" placeholder="Shaneika" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-400 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    @error('firstname')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                        Last Name
                    </label>
                    <input wire:model="lastname" id="name" type="text" placeholder="Lewis" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-400 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    @error('lastname')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="name">
                        Gender
                    </label>
                    <select wire:model="gender" id="gender" class="w-full px-3 py-2 leading-tight text-gray-500 border border-gray-400 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    <option>Select gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    </select>
                    @error('gender')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
              </div>

                <div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="mail">
                        Email address
                    </label>
                    <input wire:model="mail" id="mail" type="email" placeholder="email@example.com" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-400 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    @error('mail')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="num">
                        Phone Number
                    </label>
                    <input wire:model="tel" id="num" type="tel" placeholder="xxx-xxx-xxx" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-400 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    @error('tel')
                    <p class="mt-4 text-xs italic text-red-500">
                    {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="home">
                        Home Address
                    </label>
                    <input wire:model="homeAddress" id="home" type="text" placeholder="22 Example Street" class="w-full px-3 py-2 leading-tight text-gray-700 border border-gray-400 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    @error('homeAddress')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-bold text-gray-700" for="amt">
                        Desired Loan Amount
                    </label>
                    <input wire:model="loanAmt" id="amt" type="text" placeholder="0" class="w-1/2 px-3 py-2 leading-tight text-gray-700 border border-gray-400 rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    @error('loanAmt')
                    <p class="mt-4 text-xs italic text-red-500">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                </div>
                <div class="flex items-center justify-between">
                    <button type="submit" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" >
                        Next
                    </button>
                </div>
                </div>
            </form>
        </div>
    </div>
        </div>
@elseif($addDocMode==true)

<div class="w-full h-full bg-cover "
style="background-image: url('../images/bg.jpg')">
            <div class="flex justify-center justify-items-center">
                <div class="mb-20">
                <form wire:submit.prevent="personalDocs" class="px-10 pt-6 pb-8 mt-20 mb-4 bg-white rounded shadow-md">
                <h1 class="pb-10 text-xl font-bold text-center text-gray-700">Upload Documents</h1>
                <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="trnIm">
                            TRN
                        </label>
                        <input wire:model="trnImg" id="trnIm" type="file" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        <div wire:loading wire:target="trnImg"><span class="text-indigo-900">uploading..</span></div>
                        @error('trnImg')
                        <p class="mt-4 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    {{--  --}}

{{--                     
                    <div x-data="{isUploading: false, progress: 5}"
                        x-on:livewire-upload-start="isUploading = true"
                        x-on:livewire-upload-finish="isUploading = false: progress = 5"
                        x-on:livewire-upload-error="isUploading = false"
                        x-on:livewire-upload-progress="progress = $event.detail.progress"
                        
                    >
                        <input wire:model="resume" type="file" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        <div x-show.transition="isUploading">
                            <div class="relative h-3 max-w-xl overflow-hidden rounded-full">
                                <div class="absolute w-full h-full bg-gray-200"></div>
                                <div x-bind:style="`width:${progress}%`" class="absolute h-full bg-green-500"></div>
                            </div>
                        </div>
                    </div> --}}

                       {{--  --}}
                        
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="identity">
                            ID
                        </label>
                        <input wire:model="identity" id="identity" type="file" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        <div wire:loading wire:target="identity"><span class="text-indigo-900">uploading..</span></div>
                        @error('identity')
                        <p class="mt-4 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="image">
                            Passport size photo
                        </label>
                        <input wire:model="image" id="image" type="file" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        <div wire:loading wire:target="image"><span class="text-indigo-900">uploading..</span></div>
                        @error('image')
                        <p class="mt-4 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="income">
                            Proof of income
                        </label>
                        <input wire:model="income" id="income" type="file" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        <div wire:loading wire:target="income"><span class="text-indigo-900">uploading..</span></div>
                        @error('income')
                        <p class="mt-4 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label class="block mb-2 text-sm font-bold text-gray-700" for="address">
                            Proof of address
                        </label>
                        <input wire:model="address" id="address" type="file" class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                        <div wire:loading wire:target="address"><span class="text-indigo-900">uploading..</span></div>
                        @error('address')
                        <p class="mt-4 text-xs italic text-red-500">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-between">
                        <button wire:click="back" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="button">
                            Back
                        </button>
                        <button wire:click="view" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline" type="button">
                            Review
                        </button>

                    </div>
                </form>
            </div>
        </div>
        <div class="flex justify-center justify-items-center">
        </div>
        </div>
@elseif($viewMode==true)
<div class="w-full h-full bg-cover "
style="background-image: url('../images/background.jpg')">
            <!-- component -->

<section class="relative block h-72">
 <div class="absolute bottom-0 left-0 right-0 top-auto w-full overflow-hidden pointer-events-none h-70-px" style="transform: translateZ(0px)">
           </div>
                </section>
                <section class="relative py-16">
                    <div class="container px-4 mx-auto">
                        <div class="relative flex flex-col w-full min-w-0 mb-6 -mt-64 break-words bg-white rounded-lg shadow-xl">
                            <div class="px-6">
                                <div class="flex flex-wrap justify-center">
<div class="w-full px-4 lg:w-4/12 lg:order-3 lg:text-right lg:self-center">
                                        <div class="px-3 py-6 mt-32 sm:mt-0">

                                        </div>
                                    </div>
                                    <div class="w-full px-4 lg:w-4/12 lg:order-1"> </div>
                                </div>
                                <div class="mt-12 text-center">
                                    <h3 class="mb-2 font-serif text-4xl font-semibold leading-normal text-blueGray-700">
                                        {{ucfirst($firstname)." ".ucfirst($lastname)}}
                                    </h3>
                                    <div class="mt-0 mb-2 text-blueGray-600">
                                        <span class="mr-2 text-lg fas fa-user-alt text-blueGray-400 font-arial"> Gender: {{ucfirst($gender)}}</span>
                                        {{-- <p class="text-lg text-blueGray-400"></p> --}}
                                    </div>
                                    <div class="mt-5 mb-2 text-sm leading-normal text-blueGray-400">
                                        <span class="mr-2 text-xl fas fa-map-marker-alt text-blueGray-400"> Address: {{ucfirst($homeAddress)}}</span>
                                        {{-- <p class="text-lg text-blueGray-400">Address: {{ucfirst($homeAddress)}}</p> --}}
                                    </div>
                                    <div class="mt-5 mb-2 text-blueGray-600">
                                        <span class="mr-2 text-xl fas fa-envelope text-blueGray-400"> Email Address: {{$mail}}</span>
                                        {{-- <p class="text-lg text-blueGray-400">Email Address: {{$mail}}</p> --}}
                                    </div>
                                    <div class="mt-5 mb-2 text-blueGray-600">
                                        <i class="mr-2 text-xl fas fa-mobile-alt text-blueGray-400"> Phone Number: {{$tel}}</i>
                                        {{-- <p class="text-lg text-blueGray-400">Phone Number: {{$tel}}</p> --}}
                                    </div>
                                </div>
                                <div class="py-10 mt-10 text-center border-t border-blueGray-200">
                                    <div class="flex flex-wrap justify-center">
                                        <div class="w-full px-4 lg:w-9/12">
                                            <p class="mb-4 font-serif text-lg tracking-wide text-blueGray-500">
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
                                    <div class="px-3 py-6 mt-32 sm:mt-0">
                                        <form wire:submit.prevent="submitLoanRequest()">
                                        <button  type="submit" class="px-4 py-2 mb-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-green-900 rounded shadow outline-none active:bg-green-600 hover:shadow-md focus:outline-none sm:mr-2" >
                                            Submit
                                        </button>
                                            <button wire:click="edit" type="button" class="px-4 py-2 mb-1 text-xs font-bold text-white uppercase transition-all duration-150 ease-linear bg-indigo-900 rounded shadow outline-none active:bg-pink-600 hover:shadow-md focus:outline-none sm:mr-2" >
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
