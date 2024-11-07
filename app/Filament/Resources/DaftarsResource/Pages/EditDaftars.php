<?php

namespace App\Filament\Resources\DaftarsResource\Pages;

use App\Filament\Resources\DaftarsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDaftars extends EditRecord
{
    protected static string $resource = DaftarsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
