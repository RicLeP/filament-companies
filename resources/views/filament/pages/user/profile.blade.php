<x-filament-panels::page>
    @if (Wallo\FilamentCompanies\Features::canUpdateProfileInformation())
        @livewire(Wallo\FilamentCompanies\Http\Livewire\UpdateProfileInformationForm::class)
        <x-filament-companies::section-border />
    @endif

    @if ($user->password !== null && Wallo\FilamentCompanies\Features::canUpdatePasswords())
        @livewire(Wallo\FilamentCompanies\Http\Livewire\UpdatePasswordForm::class)
    @else
        @livewire(Wallo\FilamentCompanies\Http\Livewire\SetPasswordForm::class)
    @endif

    @if (Wallo\FilamentCompanies\Socialite::hasSocialiteFeatures())
        <x-filament-companies::section-border />
        @livewire(Wallo\FilamentCompanies\Http\Livewire\ConnectedAccountsForm::class)
    @endif

    @if ($user->password !== null)
        <x-filament-companies::section-border />
        @livewire(Wallo\FilamentCompanies\Http\Livewire\LogoutOtherBrowserSessionsForm::class)
    @endif

    @if ($user->password !== null && Wallo\FilamentCompanies\Features::hasAccountDeletionFeatures())
        <x-filament-companies::section-border />
        @livewire(Wallo\FilamentCompanies\Http\Livewire\DeleteUserForm::class)
    @endif
</x-filament-panels::page>
