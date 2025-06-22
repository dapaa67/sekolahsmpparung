<?php

namespace App\Filament\Resources\JadwalPpdbResource\Pages;

use App\Filament\Resources\JadwalPpdbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditJadwalPpdb extends EditRecord
{
    protected static string $resource = JadwalPpdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
