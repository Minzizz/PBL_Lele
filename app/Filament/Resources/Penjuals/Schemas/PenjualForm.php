<?php

namespace App\Filament\Resources\Penjuals\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
use filament\Forms\Components\DatePicker;
class PenjualForm
{
public static function configure(Schema $schema): Schema
{
    return $schema
        ->schema([ 
            Forms\Components\TextInput::make('penjual_lele_id ')
                ->numeric()
                ->label('ID Penjual'),
            Forms\Components\TextInput::make('nama_penjual')
                ->required()
                ->label('Nama Penjual'),
            Forms\Components\TextInput::make('alamat')
                ->label('Alamat')
                ->required(),
            Forms\Components\TextInput::make('no_telepon')
                ->label('No Telepon')
                ->numeric()
                ->required(),
        ]);

}
}