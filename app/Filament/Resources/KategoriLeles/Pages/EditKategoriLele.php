<?php

namespace App\Filament\Resources\KategoriLeles\Pages;

use App\Filament\Resources\KategoriLeles\KategoriLeleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKategoriLele extends EditRecord
{
    protected static string $resource = KategoriLeleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
