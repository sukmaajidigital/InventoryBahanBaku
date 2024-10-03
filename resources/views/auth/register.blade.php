<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- idrole -->
        <div>
            {{-- <x-input-label for="id_role" :value="__('id_role')" />
            <x-text-input id="id_role" class="block mt-1 w-full" type="text" name="id_role" :value="old('id_role')" required autofocus autocomplete="id_role" />
            <x-input-error :messages="$errors->get('id_role')" class="mt-2" /> --}}
            <x-input-label for="role" :value="__('Role')" />
            <x-select-input id="role" name="id_role" value="{{ old('id_role', $user->id_role ?? '') }}">
                <option value="">-- Pilih Role --</option>
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}" {{ old('id_role', $user->id_role ?? '') == $role->id ? 'selected' : '' }}>
                        {{ $role->role }}
                    </option>
                @endforeach
            </x-select-input>
            <x-input-error :messages="$errors->get('id_role')" class="mt-2" />
        </div>
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-600" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
