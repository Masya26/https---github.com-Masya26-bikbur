<section>
    <header>
        <h2 class="text-lg font-medium" style="color: white" >
            {{ __('Изменить пароль') }}
        </h2>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <x-input-label style="color: white" for="update_password_current_password" :value="__('Старый пароль')" />
            <x-text-input style="background-color: white; border-color: white; color: black;" id="update_password_current_password" name="current_password" type="password" class="mt-1 block w-full" autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        <div>
            <x-input-label style="color: white" for="update_password_password" :value="__('Новый пароль')" />
            <x-text-input style="background-color: white; border-color: white; color: black;" id="update_password_password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        <div>
            <x-input-label style="color: white" for="update_password_password_confirmation" :value="__('Подтвердите пароль')" />
            <x-text-input style="background-color: white; border-color: white; color: black;" id="update_password_password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button style="background-color: white; color: rgb(11, 178, 255);">{{ __('Сохранить') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm"
                    style="color: white"
                >{{ __('Сохранено') }}</p>
            @endif
        </div>
    </form>
</section>
