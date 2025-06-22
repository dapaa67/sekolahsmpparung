<?php

namespace App\Filament\Resources\JadwalPpdbResource\Pages;

use App\Filament\Resources\JadwalPpdbResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListJadwalPpdbs extends ListRecords
{
    protected static string $resource = JadwalPpdbResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
