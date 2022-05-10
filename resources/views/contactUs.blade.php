    @extends('layouts.appIndex')
    @section('content')

        <!-- component -->
        <div class="w-full h-full bg-cover"
        style="background-image: url('../images/background.jpg');">
            {{-- <section class="mt-10"> --}}
                <div class="flex items-center justify-center px-4 mx-auto max-w-7xl sm:px-6 lg:px-4">
                    <div class="pr-0 mt-20 lg:w-3/6 lg:pr-0 md:w-1/2">
                        <h1 class="text-5xl font-medium text-white">Have a query? Send us and email and we will reach out to you within 48hours</h1>
                        <br/><br/>
                        <p class="pl-5 mt-10 text-xl font-bold text-white">  Office Hours:</p>
                        <ul class="flex flex-row mt-4 text-lg font-semibold text-white">
                          <div class="pl-5">
                          <li>Mon-Tues</li>
                          <li>Weds</li>
                          <li>Thur</li>
                          <li>Sat</li>
                          </div>
                          <div class="pl-5">
                            <li>8AM-3PM</li>
                            <li>10AM-1PM</li>
                            <li>8AM-3PM</li>
                            <li>Closed</li>
                            </div>
                        </ul>
                    </div>
                    <div class="flex flex-col p-8 mb-10 rounded-md mbt-20 mbt-10 md:w-1/2">
                       <form class="w-3/4 p-4 rounded-md bg-gray-50">
                        <div class="relative mb-4">  
                            <label for="full-name" class="text-sm leading-7 text-gray-600">Name</label>
                            <input type="text" id="name" name="name" class="w-full px-3 py-1 text-sm leading-8 text-gray-900 transition-colors duration-150 ease-in-out bg-white border border-gray-300 rounded-md outline-none focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200">
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
                            <input type="email" id="email" name="email" class="w-full px-3 py-1 text-sm leading-8 text-gray-900 transition-colors duration-150 ease-in-out bg-white border border-gray-300 rounded-md outline-none focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200">
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="text-sm leading-7 text-gray-600">Phone</label>
                            <input type="email" id="phone" name="phone" class="w-full px-3 py-1 text-sm leading-8 text-gray-900 transition-colors duration-150 ease-in-out bg-white border border-gray-300 rounded-md outline-none focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200">
                        </div>
                        <div class="relative mb-4">
                            <label for="email" class="text-sm leading-7 text-gray-600">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-3 py-1 text-sm leading-8 text-gray-900 transition-colors duration-150 ease-in-out bg-white border border-gray-300 rounded-md outline-none resize-none focus:border-indigo-600 focus:ring-2 focus:ring-indigo-200"> </textarea>
                        </div>
                        <button class="w-full px-8 py-2 text-lg text-white bg-indigo-500 border-0 rounded-md focus:outline-none hover:bg-indigo-600">Send</button>
                       </form>
                    </div>
                    
                </div>
            {{-- </section> --}}
        </div>


@endsection



