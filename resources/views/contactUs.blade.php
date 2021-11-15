<div>

    @extends('layouts.appIndex')
    @section('content')

        <!-- component -->
        <div class=" bg-cover bg-no-repeat bg-indigo-900">
            <section class="text-gray-900 ">
{{--                     style="background:url('https://media.istockphoto.com/photos/businessman-touching-icon-mobile-phone-mail-telephone-and-address-picture-id1153130142?k=20&m=1153130142&s=612x612&w=0&h=DWIC-H0piTNxyYHYrpGnxZ0PCBs05HzeViF_nRxsJ2Y=')">--}}
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-4 flex items-center justify-center">
                    <div class="lg:w-3/6 lg:pr-0 pr-0">
                        <h1 class="font-medium text-5xl text-white">      Have a query? Send us and email and we will reach out to you within 48hours</p>
                        </h1>
                        <br/><br/>
                        <p class="text-white">  Office Hours:</p>
                        <ul class="leading-relaxed mt-4 text-white">
                          <li>Mon-Tues   8AM-3PM</li>
                          <li>Weds   10AM-1PM</li>
                          <li>Thur-Fri   8AM-3PM</li>
                          <li>Sat-Sun  Closed</li>
                        </ul>
                    </div>
                    <div class="  bg-gray-50 p-8 flex flex-col   mt-10   rounded-md">
                        <div class="relative mb-4">
                            <label for="full-name" class="leading-7 text-sm text-gray-600">Name</label>
                            <input type="text" id="name" name="name" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                            <input type="email" id="email" name="email" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="leading-7 text-sm text-gray-600">Phone</label>
                            <input type="email" id="phone" name="phone" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out">
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="leading-7 text-sm text-gray-600">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full bg-white rounded-md border border-gray-300 focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200 text-sm outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-150 ease-in-out"> </textarea>
                        </div>
                        <button class="text-white bg-indigo-500 rounded-md border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 text-lg">Submit</button>
                    </div>
                </div>
            </section>



@endsection



