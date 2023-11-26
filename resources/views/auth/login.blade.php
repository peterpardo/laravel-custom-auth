<x-layouts.default>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2
                class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">
                Sign in to your
                account</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form
                class="space-y-6"
                action="/login"
                method="POST"
            >
                @csrf
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
                        />
                        @error('email')
                            <span
                                class="ml-1 mt-1 flex items-center text-xs font-medium tracking-wide text-red-500"
                            >
                                {{ $message }}
                            </span>
                        @enderror

                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <x-forms.label for="password">
                            Password
                        </x-forms.label>
                        <div class="text-sm">
                            <x-link href="#">
                                Forgot password?
                            </x-link>
                        </div>
                    </div>
                    <div class="mt-2">
                        <x-forms.input
                            id="password"
                            name="password"
                            type="password"
                            value="{{ old('password') }}"
                        />
                        @error('password')
                            <span
                                class="ml-1 mt-1 flex items-center text-xs font-medium tracking-wide text-red-500"
                            >
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>

                <div>
                    <x-button
                        class="w-full"
                        type="submit"
                    >
                        Sign in
                    </x-button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm text-gray-500">
                Not a member?
                <x-link href="/register">
                    Sign up here
                </x-link>
            </p>
        </div>
    </div>
</x-layouts.default>
