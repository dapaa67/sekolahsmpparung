<?php

namespace App\Filament\Resources\AsetSekolahResource\Pages;

use App\Filament\Resources\AsetSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAsetSekolah extends EditRecord
{
    protected static string $resource = AsetSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
