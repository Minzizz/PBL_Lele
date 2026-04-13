<?php

namespace App\Filament\Resources\Penjualans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms;
use Filament\Forms\Form;

class PenjualanForm
{
public static function configure(Schema $schema): Schema
{
    return $schema
        ->schema([ 
            Forms\Components\DatePicker::make('tanggal')
                ->required(),

            Forms\Components\TextInput::make('jumlah_kg')
                ->numeric()
                ->reactive()
                ->required()
                ->afterStateUpdated(fn ($state, callable $set, $get) =>
                    $set('total_pendapatan', $state * ($get('harga_per_kg') ?? 0))
                ),

            Forms\Components\TextInput::make('harga_per_kg')
                ->numeric()
                ->reactive()
                ->required()
                ->afterStateUpdated(fn ($state, callable $set, $get) =>
                    $set('total_pendapatan', ($get('jumlah_kg') ?? 0) * $state)
                ),

            Forms\Components\TextInput::make('total_pendapatan')
                ->numeric()
                ->disabled()
                ->dehydrated(),

            Forms\Components\TextInput::make('biaya_operasional')
                ->numeric()
                ->reactive()
                ->required()
                ->afterStateUpdated(fn ($state, callable $set, $get) =>
                    $set('keuntungan', ($get('total_pendapatan') ?? 0) - $state)
                ),

            Forms\Components\TextInput::make('keuntungan')
                ->numeric()
                ->disabled()
                ->dehydrated(),
        ]);
}
}
