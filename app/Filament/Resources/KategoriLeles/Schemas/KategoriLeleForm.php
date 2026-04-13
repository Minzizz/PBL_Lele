<?php

namespace App\Filament\Resources\KategoriLeles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class KategoriLeleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
            TextInput::make('nama_kategori')
                ->required()
                ->label('Kategori Lele'),

            TextInput::make('ukuran_minimum')
                ->numeric()
                ->required()
                ->label('Ukuran Minimum (gram)'),

            Textarea::make('deskripsi'),

            FileUpload::make('gambar')
                ->image()
                ->directory('lele')
                ->label('Gambar'),
        ]);
    }
}
