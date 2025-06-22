<?php

namespace App\Filament\Resources\SejarahSekolahResource\Pages;

use App\Filament\Resources\SejarahSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSejarahSekolahs extends ListRecords
{
    protected static string $resource = SejarahSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
