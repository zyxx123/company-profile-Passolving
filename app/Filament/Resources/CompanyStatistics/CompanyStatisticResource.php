<?php

namespace App\Filament\Resources\CompanyStatistics;

use App\Filament\Resources\CompanyStatistics\Pages\CreateCompanyStatistic;
use App\Filament\Resources\CompanyStatistics\Pages\EditCompanyStatistic;
use App\Filament\Resources\CompanyStatistics\Pages\ListCompanyStatistics;
use App\Filament\Resources\CompanyStatistics\Schemas\CompanyStatisticForm;
use App\Filament\Resources\CompanyStatistics\Tables\CompanyStatisticsTable;
use App\Models\CompanyStatistic;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class CompanyStatisticResource extends Resource
{
    protected static ?string $model = CompanyStatistic::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;

    protected static ?string $recordTitleAttribute = 'label';

    protected static ?string $navigationLabel = 'Company Statistics';

    public static function form(Schema $schema): Schema
    {
        return CompanyStatisticForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return CompanyStatisticsTable::configure($table);
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
            'index' => ListCompanyStatistics::route('/'),
            'create' => CreateCompanyStatistic::route('/create'),
            'edit' => EditCompanyStatistic::route('/{record}/edit'),
        ];
    }
}
