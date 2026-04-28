<?php

namespace App\Filament\Resources\Penjuals\Pages;

use App\Filament\Resources\Penjuals\PenjualResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListPenjuals extends ListRecords
{
    protected static string $resource = PenjualResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
