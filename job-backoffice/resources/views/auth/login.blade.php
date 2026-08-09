<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" autofocus
                autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <x-password-input :required="false" />

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <!-- Demo Credentials -->
    <div class="mt-6 rounded-xl border border-indigo-100 bg-indigo-50 p-4">
        <div class="flex items-center gap-2 mb-3">
            <span class="text-lg">🔑</span>
            <h2 class="text-sm font-semibold text-indigo-700 uppercase tracking-wide">Demo Credentials</h2>
        </div>
        <p class="text-xs text-indigo-500 mb-3">Use the following pre-seeded accounts to test the platform:</p>
        <div class="overflow-x-auto">
            <table class="w-full text-xs">
                <thead>
                    <tr class="border-b border-indigo-200">
                        <th class="text-left py-1.5 pr-3 font-semibold text-indigo-600">Role</th>
                        <th class="text-left py-1.5 pr-3 font-semibold text-indigo-600">Email</th>
                        <th class="text-left py-1.5 pr-3 font-semibold text-indigo-600">Password</th>
                        <th class="text-left py-1.5 font-semibold text-indigo-600">App</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-indigo-100">
                    <tr>
                        <td class="py-1.5 pr-3">
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-700">Admin</span>
                        </td>
                        <td class="py-1.5 pr-3">
                            <button type="button"
                                onclick="document.getElementById('email').value='admin@admin.com'"
                                class="font-mono text-indigo-700 hover:text-indigo-900 hover:underline cursor-pointer transition-colors"
                                title="Click to fill email">admin@admin.com</button>
                        </td>
                        <td class="py-1.5 pr-3 font-mono text-gray-600">12345678</td>
                        <td class="py-1.5 text-gray-500">Back Office</td>
                    </tr>
                    <tr>
                        <td class="py-1.5 pr-3">
                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-700">Company Owner</span>
                        </td>
                        <td class="py-1.5 pr-3">
                            <button type="button"
                                onclick="document.getElementById('email').value='darian35@example.net'"
                                class="font-mono text-indigo-700 hover:text-indigo-900 hover:underline cursor-pointer transition-colors"
                                title="Click to fill email">darian35@example.net</button>
                        </td>
                        <td class="py-1.5 pr-3 font-mono text-gray-600">12345678</td>
                        <td class="py-1.5 text-gray-500">Back Office</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p class="text-xs text-indigo-400 mt-2 italic">💡 Click an email to auto-fill the login form.</p>
    </div>
</x-guest-layout>
