<?php

namespace App\Filament\Resources\DaftarsResource\Pages;

use App\Filament\Resources\DaftarsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDaftars extends ListRecords
{
    protected static string $resource = DaftarsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
