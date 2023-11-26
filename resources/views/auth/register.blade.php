<x-layouts.default>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2
                class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Sign Up
            </h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form
                class="space-y-6"
                action="/register"
                method="POST"
            >
                @csrf
                <div>
                    <x-forms.label for="first_name">
                        First Name
                    </x-forms.label>
                    <div class="mt-2">
                        <x-forms.input
                            id="first_name"
                            name="first_name"
                            type="text"
                            value="{{ old('first_name') }}"
                            required
                        />
                        @error('first_name')
                            <x-forms.error>{{ $message }}</x-forms.error>
                        @enderror
                    </div>
                </div>
                <div>
                    <x-forms.label for="middle_name">
                        Middle Name <span class="text-slate-400">(Optional)</span>
                    </x-forms.label>
                    <div class="mt-2">
                        <x-forms.input
                            id="middle_name"
                            name="middle_name"
                            type="text"
                            value="{{ old('middle_name') }}"
                        />
                        @error('middle_name')
                            <x-forms.error>{{ $message }}</x-forms.error>
                        @enderror
                    </div>
                </div>
                <div>
                    <x-forms.label for="last_name">
                        Last Name
                    </x-forms.label>
                    <div class="mt-2">
                        <x-forms.input
                            id="last_name"
                            name="last_name"
                            type="text"
                            value="{{ old('last_name') }}"
                            required
                        />
                        @error('last_name')
                            <x-forms.error>{{ $message }}</x-forms.error>
                        @enderror
                    </div>
                </div>

                <div>
                    <x-forms.label for="email">
                        Email Address
                    </x-forms.label>
                    <div class="mt-2">
                        <x-forms.input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email') }}"
                            required
                        />
                        @error('email')
                            <x-forms.error>{{ $message }}</x-forms.error>
                        @enderror
                    </div>
                </div>

                <div>
                    <x-forms.label for="password">
                        Password
                    </x-forms.label>
                    <div class="mt-2">
                        <x-forms.input
                            id="password"
                            name="password"
                            type="password"
                        />
                        @error('password')
                            <x-forms.error>{{ $message }}</x-forms.error>
                        @enderror
                    </div>
                </div>

                <div>
                    <x-forms.label for="password_confirmation">
                        Confirm Password
                    </x-forms.label>
                    <div class="mt-2">
                        <x-forms.input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                        />
                    </div>
                </div>

                <div>
                    <x-button
                        class="w-full"
                        type="submit"
                    >
                        Create account
                    </x-button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Already have an account?
                <x-link href="/login">
                    Login here
                </x-link>
            </p>
        </div>
    </div>
</x-layouts.default>
