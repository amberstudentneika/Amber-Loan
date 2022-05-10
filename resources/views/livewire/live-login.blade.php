<div> 
    <div class="w-full h-full bg-cover"
    style="background-image: url('../images/water.jpg')">
{{--    <div class="mt-20 mb-20 ">--}}

    <main class="py-20 sm:container sm:mx-auto sm:max-w-lg ">
        <div class="flex">
            <div class="w-full">
                <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                    <header class="px-6 py-5 font-semibold text-center text-gray-700 bg-gray-200 sm:py-6 sm:px-8 sm:rounded-t-md">
                        {{ __('Login') }}
                    </header>

                    <form wire:submit.prevent="login" class="w-full px-6 pt-6 pb-10 space-y-6 sm:px-10 sm:space-y-8">


                        <div class="flex flex-wrap">
                            <label for="email" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input wire:model="email" id="email" type="email"
                                   class="form-input w-full @error('email') border-red-500 @enderror" autofocus>

                            @error('email')
                            <p class="mt-4 text-xs italic text-red-500">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap">
                            <label for="password" class="block mb-2 text-sm font-bold text-gray-700 sm:mb-4">
                                {{ __('Password') }}:
                            </label>

                            <input wire:model="password" id="password" type="password"
                                   class="form-input w-full @error('password') border-red-500 @enderror">

                            @error('password')
                            <p class="mt-4 text-xs italic text-red-500">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex items-center">
                            <label class="inline-flex items-center text-sm text-gray-700" for="remember">
                                <input type="checkbox" name="remember" id="remember" class="form-checkbox"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <span class="ml-2">{{ __('Remember Me') }}</span>
                            </label>

{{--                            @if (Route::has('password.request'))--}}
{{--                                <a class="ml-auto text-sm text-blue-500 no-underline whitespace-no-wrap hover:text-blue-700 hover:underline"--}}
{{--                                   href="{{ route('password.request') }}">--}}
{{--                                    {{ __('Forgot Your Password?') }}--}}
{{--                                </a>--}}
{{--                            @endif--}}
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit"
                                    class="w-full p-3 text-base font-bold leading-normal text-gray-100 no-underline whitespace-no-wrap bg-blue-500 rounded-lg select-none hover:bg-blue-700 sm:py-4">
                                {{ __('Login') }}
                            </button>

{{--                            @if (Route::has('register'))--}}
{{--                                <p class="w-full my-6 text-xs text-center text-gray-700 sm:text-sm sm:my-8">--}}
{{--                                    {{ __("Don't have an account?") }}--}}
{{--                                    <a class="text-blue-500 no-underline hover:text-blue-700 hover:underline" href="{{ route('register') }}">--}}
{{--                                        {{ __('Register') }}--}}
{{--                                    </a>--}}
{{--                                </p>--}}

{{--                            @endif--}}
                        </div>
                    </form>
                    <div>
                        @if(session('message'))
                        <div class="flex p-4 mb-4 text-sm text-center text-red-700 bg-red-100 rounded-lg" role="alert">
                            <svg class="inline w-5 h-5 mr-3 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                            <div>
                                <span class="font-medium">Alert!</span> {{session('message')}}
                            </div>
                        </div>
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </main>
    </div>
</div>
{{--</div>--}}
