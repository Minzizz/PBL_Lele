<?php

namespace App\Filament\Resources\KategoriLeles;

use App\Filament\Resources\KategoriLeles\Pages\CreateKategoriLele;
use App\Filament\Resources\KategoriLeles\Pages\EditKategoriLele;
use App\Filament\Resources\KategoriLeles\Pages\ListKategoriLeles;
use App\Filament\Resources\KategoriLeles\Schemas\KategoriLeleForm;
use App\Filament\Resources\KategoriLeles\Tables\KategoriLelesTable;
use App\Models\KategoriLele;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KategoriLeleResource extends Resource
{
    protected static ?string $model = KategoriLele::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'kategori_lele';

    public static function form(Schema $schema): Schema
    {
        return KategoriLeleForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KategoriLelesTable::configure($table);
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
            'index' => ListKategoriLeles::route('/'),
            'create' => CreateKategoriLele::route('/create'),
            'edit' => EditKategoriLele::route('/{record}/edit'),
        ];
    }
    public static function canViewAny(): bool
    {
        return auth()->user()?->hasAnyRole(['admin', 'petugas lapangan']);
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasAnyRole(['admin', 'petugas lapangan']);
    }
}
