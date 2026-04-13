<?php

namespace App\Filament\Resources\Akuntans\Pages;

use App\Filament\Resources\Akuntans\AkuntanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAkuntans extends ListRecords
{
    protected static string $resource = AkuntanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
