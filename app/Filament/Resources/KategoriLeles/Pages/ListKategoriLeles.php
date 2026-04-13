<?php

namespace App\Filament\Resources\KategoriLeles\Pages;

use App\Filament\Resources\KategoriLeles\KategoriLeleResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKategoriLeles extends ListRecords
{
    protected static string $resource = KategoriLeleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
