<?php

namespace App\Filament\Resources\IdentitasSekolahResource\Pages;

use App\Filament\Resources\IdentitasSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditIdentitasSekolah extends EditRecord
{
    protected static string $resource = IdentitasSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
