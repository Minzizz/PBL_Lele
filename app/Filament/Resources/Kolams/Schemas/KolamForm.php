<?php

namespace App\Filament\Resources\Kolams\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

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
                
                TextInput::make('link_maps')
                    ->label('Link Google Maps')
                    ->required()
                    ->url()
                    ->helperText('Buka Google Maps lalu copy link lokasi ke sini'),
            ]);
    }
}