<x-guest-layout>
    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-fleur-dark text-fleur-light shadow-md overflow-hidden sm:rounded-3xl"> 
        
        <h2 class="text-3xl text-center font-bold uppercase mb-8">Register</h2>
        
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-input-label for="name" value="Nama Lengkap" class="text-fleur-light" />
                <x-text-input id="name" class="block mt-1 w-full rounded-full border-none px-4 py-3 bg-fleur-light text-fleur-dark" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="email" value="Email" class="text-fleur-light" />
                <x-text-input id="email" class="block mt-1 w-full rounded-full border-none px-4 py-3 bg-fleur-light text-fleur-dark" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            
            <div class="mt-4">
                <x-input-label for="username" value="Username" class="text-fleur-light" />
                <x-text-input id="username" class="block mt-1 w-full rounded-full border-none px-4 py-3 bg-fleur-light text-fleur-dark" type="text" name="username" :value="old('username')" required />
                <x-input-error :messages="$errors->get('username')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="nomor_telepon" value="Nomor Telepon" class="text-fleur-light" />
                <x-text-input id="nomor_telepon" class="block mt-1 w-full rounded-full border-none px-4 py-3 bg-fleur-light text-fleur-dark" type="text" name="nomor_telepon" :value="old('nomor_telepon')" />
                <x-input-error :messages="$errors->get('nomor_telepon')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="tanggal_lahir" value="Tanggal Lahir" class="text-fleur-light" />
                <x-text-input id="tanggal_lahir" class="block mt-1 w-full rounded-full border-none px-4 py-3 bg-fleur-light text-fleur-dark" type="date" name="tanggal_lahir" :value="old('tanggal_lahir')" />
                <x-input-error :messages="$errors->get('tanggal_lahir')" class="mt-2" />
            </div>
            
            <div class="mt-4">
                <x-input-label for="password" value="Password" class="text-fleur-light" />
                <x-text-input id="password" class="block mt-1 w-full rounded-full border-none px-4 py-3 bg-fleur-light text-fleur-dark" type="password" name="password" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="password_confirmation" value="Konfirmasi Password" class="text-fleur-light" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-full border-none px-4 py-3 bg-fleur-light text-fleur-dark" type="password" name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-primary-button class="w-full justify-center bg-fleur-light text-fleur-dark hover:bg-white text-base font-bold py-3 rounded-full">
                    {{ __('Create Account') }}
                </x-primary-button>
            </div>
            
            <div class="text-center mt-6">
                <a class="underline text-sm hover:text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already have an account? Sign in') }}
                </a>
            </div>
        </form>
    </div>
</x-guest-layout>