<?php

namespace App\Filament\Resources\CompanyJourneys;

use App\Filament\Resources\CompanyJourneys\Pages\CreateCompanyJourney;
use App\Filament\Resources\CompanyJourneys\Pages\EditCompanyJourney;
use App\Filament\Resources\CompanyJourneys\Pages\ListCompanyJourneys;
use App\Filament\Resources\CompanyJourneys\Schemas\CompanyJourneyForm;
use App\Filament\Resources\CompanyJourneys\Tables\CompanyJourneysTable;
use App\Models\CompanyJourney;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CompanyJourneyResource extends Resource
{
    protected static ?string $model = CompanyJourney::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedFlag;

    protected static ?string $recordTitleAttribute = 'title';

    protected static ?string $navigationLabel = 'Company Journey';

    public static function form(Schema $schema): Schema
    {
        return CompanyJourneyForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CompanyJourneysTable::configure($table);
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
            'index' => ListCompanyJourneys::route('/'),
            'create' => CreateCompanyJourney::route('/create'),
            'edit' => EditCompanyJourney::route('/{record}/edit'),
        ];
    }
}
