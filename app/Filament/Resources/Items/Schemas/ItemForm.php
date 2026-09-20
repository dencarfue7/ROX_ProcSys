<?php

namespace App\Filament\Resources\Items\Schemas;

//use App\Models\ItemCategory;
//use App\Models\Unit;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('item_code')
                    ->label('Item Code')
                    ->required()
                    ->maxLength(50)
                    ->unique(ignoreRecord: true)
                    ->placeholder('IT-0001'),

                Select::make('item_category_id')
                    ->label('Category')
                    ->relationship(
                        name: 'category',
                        titleAttribute: 'name',
                    )
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('name')
                    ->label('Item Name')
                    ->required()
                    ->maxLength(255),

                Select::make('unit_id')
                    ->label('Unit')
                    ->relationship(
                        name: 'unit',
                        titleAttribute: 'name',
                    )
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('brand')
                    ->maxLength(255),

                TextInput::make('model')
                    ->maxLength(255),

                TextInput::make('estimated_unit_cost')
                    ->label('Estimated Unit Cost')
                    ->numeric()
                    ->prefix('₱')
                    ->minValue(0)
                    ->required(),

                Textarea::make('description')
                    ->rows(3)
                    ->columnSpanFull(),

                Textarea::make('specifications')
                    ->rows(5)
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->label('Active')
                    ->default(true),
            ])
            ->columns(2);
    }
}
