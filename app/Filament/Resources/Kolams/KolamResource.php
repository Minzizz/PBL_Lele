<?php

namespace App\Filament\Resources\Kolams;

use App\Filament\Resources\Kolams\Pages\CreateKolam;
use App\Filament\Resources\Kolams\Pages\EditKolam;
use App\Filament\Resources\Kolams\Pages\ListKolams;
use App\Filament\Resources\Kolams\Schemas\KolamForm;
use App\Filament\Resources\Kolams\Tables\KolamsTable;
use App\Models\Kolam;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KolamResource extends Resource
{
    protected static ?string $model = Kolam::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'nama_kolam';

    public static function form(Schema $schema): Schema
    {
        return KolamForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KolamsTable::configure($table);
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
            'index' => ListKolams::route('/'),
            'create' => CreateKolam::route('/create'),
            'edit' => EditKolam::route('/{record}/edit'),
        ];
    }

    // 🔐 BATASI AKSES (INI YANG KITA TAMBAH)

    public static function canViewAny(): bool
    {
        return auth()->user()?->hasAnyRole(['admin', 'petugas lapangan']);
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasAnyRole(['admin', 'petugas lapangan']);
    }
}