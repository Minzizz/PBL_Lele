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

    protected static string | \UnitEnum | null $navigationGroup = 'Menu Petugas';

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-map';

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
            //PostsRelationManager::class,
            //return $this->hasMany(Monitoring::class, 'kolam_id');
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

    public static function canViewAny(): bool
    {
        return auth()->user()?->hasAnyRole(['petugas lapangan']);
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()?->hasAnyRole(['petugas lapangan']);
    }
}