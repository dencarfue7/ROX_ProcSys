<?php

namespace App\Filament\Resources\Units\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class UnitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('code')
                    ->label('Unit Code')
                    ->required()
                    ->maxLength(30)
                    ->unique(ignoreRecord: true)
                    ->placeholder('PC'),

                TextInput::make('name')
                    ->label('Unit Name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Piece'),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ])
            ->columns(2);
    }
}
