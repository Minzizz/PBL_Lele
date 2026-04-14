<?php

namespace App\Filament\Resources\KategoriLeles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Support\Icons\Heroicon;

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
                ->disk('public')
                ->label('Gambar'),
            TextColumn::make('nama_kategori')
                ->label('Nama kategori')
                ->icon(Heroicon::OutlinedTag),

            TextColumn::make('ukuran_minimum')
                ->label('Standar panen')
                ->icon(Heroicon::OutlinedScale),

            ImageColumn::make('gambar')
                ->label('Gambar')
                ->icon(Heroicon::OutlinedPhoto),
            ]);
    }
}
