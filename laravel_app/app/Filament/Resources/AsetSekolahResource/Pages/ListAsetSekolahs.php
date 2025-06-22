<?php

namespace App\Filament\Resources\AsetSekolahResource\Pages;

use App\Filament\Resources\AsetSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAsetSekolahs extends ListRecords
{
    protected static string $resource = AsetSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
