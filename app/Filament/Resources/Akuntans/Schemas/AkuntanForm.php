<?php

namespace App\Filament\Resources\Akuntans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Form;
use Filament\Forms;


class AkuntanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Forms\Components\Select::make('kuartal')
                    ->options([
                        1 => 'Kuartal 1',
                        2 => 'Kuartal 2',
                        3 => 'Kuartal 3',
                        4 => 'Kuartal 4',
                    ])->required(),
                Forms\Components\TextInput::make('tahun')
                    ->numeric()
                    ->default(date('Y')),

                // Input Biaya
                Forms\Components\TextInput::make('biaya_pakan')
                    ->numeric()
                    ->live()
                    ->afterStateUpdated(fn($state, $set, $get) => self::updateTotal($set, $get)),
                Forms\Components\TextInput::make('biaya_listrik')
                    ->numeric()
                    ->live()
                    ->afterStateUpdated(fn($state, $set, $get) => self::updateTotal($set, $get)),
                Forms\Components\TextInput::make('biaya_air')
                    ->numeric()
                    ->live()
                    ->afterStateUpdated(fn($state, $set, $get) => self::updateTotal($set, $get)),
                Forms\Components\TextInput::make('biaya_vitamin')
                    ->numeric()
                    ->live()
                    ->afterStateUpdated(fn($state, $set, $get) => self::updateTotal($set, $get)),

                // Field Total (Readonly biar gak bisa diedit manual)
                Forms\Components\TextInput::make('total_biaya')
                    ->numeric()
                    ->readOnly()
                    ->prefix('Rp'),
            ]);
    }
    // Fungsi pembantu buat jumlahin
    public static function updateTotal($set, $get)
    {
        $total = (float)$get('biaya_pakan') +
            (float)$get('biaya_listrik') +
            (float)$get('biaya_air') +
            (float)$get('biaya_vitamin');

        $set('total_biaya', $total);
    }
    
}
