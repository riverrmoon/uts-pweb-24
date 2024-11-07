<?php

namespace App\Filament\Resources\PasiensResource\Pages;

use App\Filament\Resources\PasiensResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPasiens extends EditRecord
{
    protected static string $resource = PasiensResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
