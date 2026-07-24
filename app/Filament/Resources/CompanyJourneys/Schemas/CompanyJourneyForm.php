<?php

namespace App\Filament\Resources\CompanyJourneys\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class CompanyJourneyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('year')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('subtitle'),
                Textarea::make('description')
                    ->columnSpanFull(),
                Toggle::make('is_current')
                    ->default(false),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
