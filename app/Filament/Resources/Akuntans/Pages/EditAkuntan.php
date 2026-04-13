<?php

namespace App\Filament\Resources\Akuntans\Pages;

use App\Filament\Resources\Akuntans\AkuntanResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAkuntan extends EditRecord
{
    protected static string $resource = AkuntanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
