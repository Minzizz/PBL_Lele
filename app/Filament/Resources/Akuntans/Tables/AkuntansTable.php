<?php

namespace App\Filament\Resources\Akuntans\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\ColorColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;

class AkuntansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('kuartal')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('tahun')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('biaya_pakan')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('biaya_listrik')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('biaya_air')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('biaya_vitamin')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('total_biaya')
                    ->sortable()
                    ->searchable(),
            ])->defaultSort('kuartal', 'desc') 
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
