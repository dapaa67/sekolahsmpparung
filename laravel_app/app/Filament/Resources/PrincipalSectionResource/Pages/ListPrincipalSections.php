<?php

namespace App\Filament\Resources\PrincipalSectionResource\Pages;

use App\Filament\Resources\PrincipalSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPrincipalSections extends ListRecords
{
    protected static string $resource = PrincipalSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
