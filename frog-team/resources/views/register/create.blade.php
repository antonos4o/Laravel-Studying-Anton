<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>

            <form method="POST" action="/register" class="mt-10" id="register-form">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="name"
                    >
                        Name
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name') }}"
                        required
                    >
                </div>
                    @error('name')                      {{-- Validation message --}}
                        <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
                    @enderror

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="username"
                    >
                        Username
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="text"
                        name="username"
                        id="username"
                        value="{{ old('username') }}"
                        required
                    >
                </div>
                    @error('username')                 {{-- Validation message --}}
                        <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
                    @enderror

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="email"
                    >
                        Email
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email') }}"
                        required
                    >
                </div>
                    @error('email')                      {{-- Validation message --}}
                        <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
                    @enderror

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                        for="password"
                    >
                        Password
                    </label>

                    <input class="border border-gray-400 p-2 w-full"
                        type="password"
                        name="password"
                        id="password"
                        required
                    >
                </div>
                    @error('password')                      {{-- Validation message --}}
                        <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
                    @enderror

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            for="password"
                        >
                            Password Confirmation
                        </label>
    
                        <input class="border border-gray-400 p-2 w-full"
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            required
                        >
                    </div>
                        @error('password_confirmation')        {{-- Validation message --}}
                            <p class="text-red-500 text-xs mt-1"> {{ $message }} </p>
                        @enderror

                    <div class="mb-6">
                        <ul>Password must be:</ul>
                        <ul id="password-rules">
                        <li id="min-length" class="invalid">At least 8 characters long</li>
                        <li id="uppercase" class="invalid">At least one uppercase letter</li>
                        <li id="lowercase" class="invalid">At least one lowercase letter</li>
                        <li id="number" class="invalid">At least one number</li>
                        <li id="special-char" class="invalid">At least one special character (@, $, !, %, *, #, ?, &)</li>
                        <li id="password-match" class="invalid">Password and Password Confirmation must match</li>
                    </div>
                    </ul>
                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                            id="submit-registration-button"
                            disabled
                    >
                        Submit
                    </button>
                </div>
            </form>
        </main>
        <script src="{{ asset('js/passwordValidation.js') }}"></script>
    </section>
</x-layout>