

<x-guest-layout>
    <h2 class="text-center text-2xl font-bold mb-6">Register Now</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div class="mt-4">

            <x-input-label for="name" :value="__('Name')" class="block font-medium text-md text-gray-700" />
            <x-text-input id="name" class="block mt-1 w-full  form-input p-1" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-500 text-xs" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
           

            <x-input-label for="email" :value="__('Email')" class="block font-medium text-md text-gray-700" />
            <x-text-input id="email" class="block mt-1 w-full form-input p-1" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Phone -->
       

            <div class="mt-4">
                <x-input-label for="phone" :value="__('phone')" class="block font-medium text-md text-gray-700" />
                <x-text-input id="phone" class="block mt-1 w-full form-input p-1" type="tel" name="phone" :value="old('phone')" required autocomplete="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
    
        {{-- </div> --}}

        <!-- Address -->
        <div class="mt-4">
       


            <x-input-label for="address" :value="__('address')" class="block font-medium text-md text-gray-700" />
            <x-text-input id="address" class="block mt-1 w-full form-input p-1" type="text" name="address" :value="old('address')" required autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />


            
        </div>

        <!-- Password -->
        <div class="mt-4">
          


            <x-input-label for="password" :value="__('Password')" class="block font-medium text-md text-gray-700" />

            <x-text-input id="password" class="block mt-1 w-full form-input p-1"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />



        </div>

        <!-- Confirm Password -->
        <div class="mt-4">


            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block font-medium text-md text-gray-700" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full form-input p-1"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />



        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-md text-gray-800 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>


            <x-primary-button  class="ml-4 px-4 py-2 rounded-md text-white btn-primary fw-bold">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>



</x-guest-layout>



