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
                action="#"
                method="POST"
            >
                <div>
                    <x-forms.label for="email">
                        Email Address
                    </x-forms.label>
                    <div class="mt-2">
                        <x-forms.input
                            id="email"
                            name="email"
                            type="text"
                        />
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
                    </div>
                </div>

                <div>
                    <x-forms.label for="confirm_password">
                        Confirm Password
                    </x-forms.label>
                    <div class="mt-2">
                        <x-forms.input
                            id="confirm_password"
                            name="confirm_password"
                            type="confirm_password"
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
