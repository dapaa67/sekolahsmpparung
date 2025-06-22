<?php

namespace App\Filament\Resources\LingkunganSekolahResource\Pages;

use App\Filament\Resources\LingkunganSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLingkunganSekolah extends EditRecord
{
    protected static string $resource = LingkunganSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
