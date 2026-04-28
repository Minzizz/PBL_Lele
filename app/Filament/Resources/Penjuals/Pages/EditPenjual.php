<?php

namespace App\Filament\Resources\Penjuals\Pages;

use App\Filament\Resources\Penjuals\PenjualResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPenjual extends EditRecord
{
    protected static string $resource = PenjualResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
