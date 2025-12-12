<x-app-layout>
    <div class="flex min-h-screen bg-[#FFF8E1]">
        <!-- Sidebar -->
        <div class="w-64 p-6 space-y-4 hidden md:block">
             <!-- Buttons -->
             <a href="{{ route('dashboard') }}" class="block w-full text-center py-2 px-4 bg-[#795548] text-white rounded-full font-bold hover:bg-[#5D4037]">Back</a>
             <a href="{{ route('profile.edit') }}" class="block w-full text-center py-2 px-4 bg-[#795548] text-white rounded-full font-bold hover:bg-[#5D4037]">My Profile</a>
             <a href="{{ route('transactions.index') }}" class="block w-full text-center py-2 px-4 bg-[#795548] text-white rounded-full font-bold hover:bg-[#5D4037]">Transaction History</a>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6 flex justify-center items-start">
            <div class="bg-[#5D4037] rounded-3xl p-8 w-full max-w-2xl text-white relative shadow-xl">
                
                <form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    @method('patch')

                    <!-- Profile Photo -->
                    <div class="flex flex-col items-center space-y-4" x-data="{ photoName: null, photoPreview: null }">
                        <!-- File Input -->
                        <input type="file" id="photo" name="photo" class="hidden"
                               x-ref="photo"
                               x-on:change="
                                       photoName = $refs.photo.files[0].name;
                                       const reader = new FileReader();
                                       reader.onload = (e) => {
                                           photoPreview = e.target.result;
                                       };
                                       reader.readAsDataURL($refs.photo.files[0]);
                               ">

                        <!-- Current Profile Photo -->
                        <div class="relative mt-2" x-show="! photoPreview">
                            <img src="{{ $user->profile_photo_path ? asset('storage/' . $user->profile_photo_path) : asset('images/user_icon.png') }}" alt="{{ $user->name }}" class="rounded-full h-32 w-32 object-cover border-4 border-[#FFAB91]">
                             <div class="absolute bottom-0 right-0 bg-white rounded-full p-1 cursor-pointer hover:bg-gray-100" x-on:click.prevent="$refs.photo.click()">
                                <!-- Edit Icon (Pencil) -->
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </div>
                        </div>

                        <!-- New Profile Photo Preview -->
                        <div class="relative mt-2" x-show="photoPreview" style="display: none;">
                            <span class="block rounded-full w-32 h-32 bg-cover bg-no-repeat bg-center border-4 border-[#FFAB91]"
                                  x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                            </span>
                             <div class="absolute bottom-0 right-0 bg-white rounded-full p-1 cursor-pointer hover:bg-gray-100" x-on:click.prevent="$refs.photo.click()">
                                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z"></path></svg>
                            </div>
                        </div>

                        <!-- Delete Photo Button -->
                        <button type="button" x-on:click="document.getElementById('delete_photo_input').value = 1; $el.closest('form').submit();" class="bg-[#FF6B6B] text-white px-4 py-2 rounded-full text-sm font-bold hover:bg-[#FF5252] transition">
                            Hapus Foto Profil
                        </button>
                        <input type="hidden" name="delete_photo" id="delete_photo_input" value="0">
                        <x-input-error class="mt-2" :messages="$errors->get('photo')" />
                    </div>

                    <!-- Fields -->
                    <div class="space-y-4">
                        <!-- Username -->
                        <div>
                            <label for="username" class="block text-sm font-bold mb-1 ml-2">Username</label>
                            <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" class="w-full rounded-full bg-[#FFF8E1] border-none px-4 py-2 text-gray-800 focus:ring-2 focus:ring-[#FFAB91]">
                            <x-input-error class="mt-2" :messages="$errors->get('username')" />
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-bold mb-1 ml-2">Email</label>
                            <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" class="w-full rounded-full bg-[#FFF8E1] border-none px-4 py-2 text-gray-800 focus:ring-2 focus:ring-[#FFAB91]">
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <!-- Telephone -->
                        <div>
                            <label for="nomor_telepon" class="block text-sm font-bold mb-1 ml-2">Telephone</label>
                            <input type="text" id="nomor_telepon" name="nomor_telepon" value="{{ old('nomor_telepon', $user->nomor_telepon) }}" class="w-full rounded-full bg-[#FFF8E1] border-none px-4 py-2 text-gray-800 focus:ring-2 focus:ring-[#FFAB91]">
                            <x-input-error class="mt-2" :messages="$errors->get('nomor_telepon')" />
                        </div>

                        <!-- Password -->
                        <div>
                            <label for="password" class="block text-sm font-bold mb-1 ml-2">Password</label>
                            <input type="password" id="password" name="password" placeholder="*************" class="w-full rounded-full bg-[#FFF8E1] border-none px-4 py-2 text-gray-800 focus:ring-2 focus:ring-[#FFAB91]">
                            <x-input-error class="mt-2" :messages="$errors->get('password')" />
                        </div>
                    </div>

                    <!-- Save Button -->
                    <div class="pt-4">
                        <button type="submit" class="w-full bg-[#FF6B6B] text-white font-bold py-3 rounded-full hover:bg-[#FF5252] transition duration-200 shadow-lg">
                            Save Changes
                        </button>
                    </div>
                    
                    @if (session('status') === 'profile-updated')
                        <p
                            x-data="{ show: true }"
                            x-show="show"
                            x-transition
                            x-init="setTimeout(() => show = false, 2000)"
                            class="text-sm text-green-400 text-center font-bold"
                        >{{ __('Saved.') }}</p>
                    @endif
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
