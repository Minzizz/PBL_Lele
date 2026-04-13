<?php

namespace App\Filament\Resources\Monitorings\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class MonitoringForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                // Input Tanggal Pengecekan
                Forms\Components\DatePicker::make('tanggal')
                    ->required()
                    ->default(now())
                    ->label('Tanggal Monitoring'),

                // Input Suhu Air Kolam
                Forms\Components\TextInput::make('suhu_air')
                    ->numeric()
                    ->suffix('°C')
                    ->required()
                    ->label('Suhu Air'),

                // Dropdown Kondisi Air
                Forms\Components\Select::make('kondisi_air')
                    ->options([
                        'jernih' => 'Jernih',
                        'keruh' => 'Keruh',
                        'hijau' => 'Hijau Pekat',
                        'bau' => 'Berbau',
                    ])
                    ->required()
                    ->native(false) // Membuat tampilan dropdown lebih modern
                    ->label('Kondisi Air'),

                // Input Jumlah Ikan Mati
                Forms\Components\TextInput::make('ikan_mati')
                    ->numeric()
                    ->label('Jumlah Ikan Mati (Ekor)')
                    ->default(0)
                    ->minValue(0)
                    ->required(),

                // Laporan Deskriptif Singkat
                Forms\Components\Textarea::make('laporan_deskriptif')
                    ->label('Catatan Harian / Laporan Deskriptif')
                    ->placeholder('Contoh: Ikan kurang nafsu makan, air sudah dikuras 20%...')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}