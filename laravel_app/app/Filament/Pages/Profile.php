<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Profile extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-user-circle';
    protected static string $view = 'filament.pages.profile'; // WAJIB diisi

    public $name;
    public $email;
    public $password;
    public $password_confirmation;

    public function mount(): void
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->email = $user->email;
    }

    public function save()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();

        $user->name = $this->name;
        $user->email = $this->email;

        if ($this->password) {
            if ($this->password === $this->password_confirmation) {
                $user->password = Hash::make($this->password);
            } else {
                $this->addError('password', 'Konfirmasi password tidak cocok.');
                return;
            }
        }

        $user->save();

        Notification::make()
            ->title('Profil berhasil diperbarui')
            ->success()
            ->send();
    }
}
