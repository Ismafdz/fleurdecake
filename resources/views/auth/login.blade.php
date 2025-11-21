<x-guest-layout>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-fleur-dark text-fleur-light shadow-md overflow-hidden sm:rounded-3xl">

        <h2 class="text-3xl text-center font-bold uppercase mb-8">LOGIN</h2>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-input-label for="email" value="Email" class="text-fleur-light" />
                <x-text-input id="email" class="block mt-1 w-full rounded-full border-none px-4 py-3 bg-fleur-light text-fleur-dark" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password" value="Password" class="text-fleur-light" />
                <x-text-input id="password" class="block mt-1 w-full rounded-full border-none px-4 py-3 bg-fleur-light text-fleur-dark" type="password" name="password" required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="flex items-center justify-between mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-auto" href="{{ route('password.request') }}">
                        {{ __('Forgot Password?') }}
                    </a>
                @endif
            </div>

            <div class="flex items-center justify-end mt-6">
                <x-primary-button class="w-full justify-center bg-fleur-light text-fleur-dark hover:bg-white text-base font-bold py-3 rounded-full">
                    {{ __('Sign In') }}
                </x-primary-button>
            </div>
            
            <div class="text-center mt-6">
                <a class="underline text-sm hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __("Don't have an account? Register Now!") }}
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>