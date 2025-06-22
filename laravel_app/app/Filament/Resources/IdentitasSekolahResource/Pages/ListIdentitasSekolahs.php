<?php

namespace App\Filament\Resources\IdentitasSekolahResource\Pages;

use App\Filament\Resources\IdentitasSekolahResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListIdentitasSekolahs extends ListRecords
{
    protected static string $resource = IdentitasSekolahResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
