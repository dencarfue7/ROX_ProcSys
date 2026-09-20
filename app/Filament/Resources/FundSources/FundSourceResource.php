<?php

namespace App\Filament\Resources\FundSources;

use App\Filament\Resources\FundSources\Pages\CreateFundSource;
use App\Filament\Resources\FundSources\Pages\EditFundSource;
use App\Filament\Resources\FundSources\Pages\ListFundSources;
use App\Filament\Resources\FundSources\Schemas\FundSourceForm;
use App\Filament\Resources\FundSources\Tables\FundSourcesTable;
use App\Models\FundSource;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class FundSourceResource extends Resource
{
    protected static ?string $model = FundSource::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    protected static ?string $navigationLabel = 'Fund Sources';

    protected static string|UnitEnum|null $navigationGroup = 'Master Data';

    public static function form(Schema $schema): Schema
    {
        return FundSourceForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return FundSourcesTable::configure($table);
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
            'index' => ListFundSources::route('/'),
            'create' => CreateFundSource::route('/create'),
            'edit' => EditFundSource::route('/{record}/edit'),
        ];
    }
}
