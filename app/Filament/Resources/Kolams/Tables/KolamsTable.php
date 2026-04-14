<?php

namespace App\Filament\Resources\Kolams\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class KolamsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_kolam')->label('Nama Kolam'),
                TextColumn::make('lokasi')
                    ->label('Lokasi')
                    ->url(fn ($record) => $record->lokasi)
                    ->openUrlInNewTab()
                    ->icon('heroicon-o-map'),
                TextColumn::make('kapasitas'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
