<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('verify.store') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="code" :value="__('Verify OTP')" />
            <x-text-input id="code" class="block mt-1 w-full" type="text" name="code" :value="old('code')" required autofocus />
            <x-input-error :messages="$errors->get('code')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                OK
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
