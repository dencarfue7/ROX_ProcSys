<?php

namespace App\Filament\Resources\Suppliers\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SupplierForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('supplier_code')
                    ->required(),
                TextInput::make('business_name')
                    ->required(),
                TextInput::make('trade_name'),
                TextInput::make('supplier_type'),
                TextInput::make('business_structure'),
                TextInput::make('tin'),
                TextInput::make('philgeps_number'),
                DatePicker::make('philgeps_expiry_date'),
                TextInput::make('contact_person'),
                TextInput::make('position'),
                TextInput::make('email')
                    ->label('Email address')
                    ->email(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('mobile'),
                Textarea::make('address')
                    ->columnSpanFull(),
                TextInput::make('barangay'),
                TextInput::make('city'),
                TextInput::make('province'),
                TextInput::make('region'),
                TextInput::make('postal_code'),
                TextInput::make('website')
                    ->url(),
                TextInput::make('status')
                    ->required()
                    ->default('pending'),
                Toggle::make('is_blacklisted')
                    ->required(),
                DatePicker::make('blacklist_date'),
                Textarea::make('blacklist_reason')
                    ->columnSpanFull(),
                Textarea::make('remarks')
                    ->columnSpanFull(),
                TextInput::make('created_by')
                    ->numeric(),
                TextInput::make('updated_by')
                    ->numeric(),
            ]);
    }
}
