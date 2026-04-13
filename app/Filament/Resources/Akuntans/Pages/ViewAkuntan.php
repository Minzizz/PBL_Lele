<?php

namespace App\Filament\Resources\Akuntans\Pages;

use App\Filament\Resources\Akuntans\AkuntanResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAkuntan extends ViewRecord
{
    protected static string $resource = AkuntanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
