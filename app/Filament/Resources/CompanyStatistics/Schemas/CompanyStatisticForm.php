<?php

namespace App\Filament\Resources\CompanyStatistics\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class CompanyStatisticForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('label')
                    ->required(),
                TextInput::make('value')
                    ->numeric()
                    ->required(),
                TextInput::make('suffix')
                    ->placeholder('e.g. +, %'),
                TextInput::make('icon')
                    ->placeholder('e.g. lucide-target'),
                TextInput::make('sort_order')
                    ->numeric()
                    ->default(0),
            ]);
    }
}
