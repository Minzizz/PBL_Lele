<?php

namespace App\Filament\Resources\Penjuals;

use App\Filament\Resources\Penjuals\Pages\CreatePenjual;
use App\Filament\Resources\Penjuals\Pages\EditPenjual;
use App\Filament\Resources\Penjuals\Pages\ListPenjuals;
use App\Filament\Resources\Penjuals\Schemas\PenjualForm;
use App\Filament\Resources\Penjuals\Tables\PenjualsTable;
use App\Models\penjual_lele;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PenjualResource extends Resource
{
    protected static ?string $model = penjual_lele::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = '-name';

    public static function form(Schema $schema): Schema
    {
        return PenjualForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PenjualsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPenjuals::route('/'),
            'create' => CreatePenjual::route('/create'),
            'edit' => EditPenjual::route('/{record}/edit'),
        ];
    }
}
