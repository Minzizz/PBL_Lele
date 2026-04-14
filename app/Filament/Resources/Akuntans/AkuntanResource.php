<?php

namespace App\Filament\Resources\Akuntans;

use App\Models\Pengeluaran;
use App\Filament\Resources\Akuntans\Pages\CreateAkuntan;
use App\Filament\Resources\Akuntans\Pages\EditAkuntan;
use App\Filament\Resources\Akuntans\Pages\ListAkuntans;
use App\Filament\Resources\Akuntans\Pages\ViewAkuntan;
use App\Filament\Resources\Akuntans\Schemas\AkuntanForm;
use App\Filament\Resources\Akuntans\Schemas\AkuntanInfolist;
use App\Filament\Resources\Akuntans\Tables\AkuntansTable;
use App\Models\Akuntan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use Filament\Forms\Form;
use Filament\Forms;
use Filament\Tables;

class AkuntanResource extends Resource
{
    protected static ?string $model = Pengeluaran::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Akuntan';

    public static function form(Schema $schema): Schema
    {
        return AkuntanForm::configure($schema);
    }
    
    public static function infolist(Schema $schema): Schema
    {
        return AkuntanInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AkuntansTable::configure($table);
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
            'index' => ListAkuntans::route('/'),
            'create' => CreateAkuntan::route('/create'),
            'view' => ViewAkuntan::route('/{record}'),
            'edit' => EditAkuntan::route('/{record}/edit'),
        ];
    }
    public static function canViewAny(): bool
        {
            return auth()->user()?->hasAnyRole(['admin', 'administrasi']);
        }

        public static function shouldRegisterNavigation(): bool
        {
            return auth()->user()?->hasAnyRole(['admin', 'administrasi']);
    }
}
