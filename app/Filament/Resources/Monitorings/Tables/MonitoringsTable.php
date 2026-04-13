<?php

namespace App\Filament\Resources\Monitorings\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\TextColumn;

class MonitoringsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom Tanggal
                TextColumn::make('tanggal')
                    ->date()
                    ->sortable()
                    ->label('Tanggal'),

                // Kolom Suhu Air
                TextColumn::make('suhu_air')
                    ->suffix('°C')
                    ->label('Suhu'),

                // Kolom Kondisi Air (Badge)
                TextColumn::make('kondisi_air')
                    ->badge()
                    ->colors([
                        'success' => 'jernih',
                        'warning' => 'keruh',
                        'danger' => 'bau',
                        'info' => 'hijau',
                    ])
                    ->label('Kondisi'),

                // Kolom Ikan Mati
                TextColumn::make('ikan_mati')
                    ->label('Mati (Ekor)')
                    ->sortable(),

                // Kolom Timestamp (Tersembunyi secara default)
                TextColumn::make('created_at')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}