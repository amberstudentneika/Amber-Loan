<div> <div class="bg-indigo-900 bg-cover">
{{--    <div class="mb-20 mt-20 ">--}}

    <main class="py-20 sm:container sm:mx-auto sm:max-w-lg  ">
        <div class="flex">
            <div class="w-full">
                <section class=" flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

                    <header class="font-semibold bg-gray-200 text-gray-700 py-5 px-6 sm:py-6 sm:px-8 sm:rounded-t-md">
                        {{ __('Login') }}
                    </header>

                    <form wire:submit.prevent="login" class="w-full px-6 pt-6 pb-10 space-y-6 sm:px-10 sm:space-y-8">


                        <div class="flex flex-wrap">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input wire:model="email" id="email" type="email"
                                   class="form-input w-full @error('email') border-red-500 @enderror" autofocus>

                            @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                            @enderror
                        </div>

                        <div class="flex flex-wrap">
                            <label for="password" class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                                {{ __('Password') }}:
                            </label>

                            <input wire:model="password" id="password" type="password"
                                   class="form-input w-full @error('password') border-red-500 @enderror">

                            @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
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
{{--                                <a class="text-sm text-blue-500 hover:text-blue-700 whitespace-no-wrap no-underline hover:underline ml-auto"--}}
{{--                                   href="{{ route('password.request') }}">--}}
{{--                                    {{ __('Forgot Your Password?') }}--}}
{{--                                </a>--}}
{{--                            @endif--}}
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit"
                                    class="w-full select-none font-bold whitespace-no-wrap p-3 rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-700 sm:py-4">
                                {{ __('Login') }}
                            </button>

{{--                            @if (Route::has('register'))--}}
{{--                                <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">--}}
{{--                                    {{ __("Don't have an account?") }}--}}
{{--                                    <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('register') }}">--}}
{{--                                        {{ __('Register') }}--}}
{{--                                    </a>--}}
{{--                                </p>--}}

{{--                            @endif--}}
                        </div>
                    </form>
                    <div>
                        @if(session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
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
