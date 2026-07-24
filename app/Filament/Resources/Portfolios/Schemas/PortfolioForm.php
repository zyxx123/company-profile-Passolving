<?php

namespace App\Filament\Resources\Portfolios\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class PortfolioForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('client'),
                Select::make('category')
                    ->options([
                        'Training' => 'Training',
                        'Assessment' => 'Assessment',
                        'Certification' => 'Certification',
                        'Consulting' => 'Consulting',
                        'Transformation' => 'Transformation',
                    ])
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                FileUpload::make('image_url')
                    ->image()
                    ->imageEditor()
                    ->directory('portfolios'),
                Textarea::make('context')
                    ->columnSpanFull(),
                TextInput::make('focus'),
                TextInput::make('role'),
                TagsInput::make('impact')
                    ->columnSpanFull(),
            ]);
    }
}
