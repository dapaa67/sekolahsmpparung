<?php

namespace App\Filament\Resources\PersyaratanPpdbResource\Pages;

use App\Filament\Resources\PersyaratanPpdbResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPersyaratanPpdb extends EditRecord
{
    protected static string $resource = PersyaratanPpdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
