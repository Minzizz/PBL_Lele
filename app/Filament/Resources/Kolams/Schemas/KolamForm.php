<?php

namespace App\Filament\Resources\Kolams\Schemas;

use Filament\Schemas\Schema;

class KolamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama_kolam')
                    ->required()
                    ->label('Nama Kolam'),

                TextInput::make('lokasi')
                    ->label('Lokasi'),

                TextInput::make('kapasitas')
                    ->numeric()
                    ->label('Kapasitas'),
            ]);
    }
}
