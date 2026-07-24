<?php

namespace App\Filament\Resources\CompanyStatistics\Pages;

use App\Filament\Resources\CompanyStatistics\CompanyStatisticResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCompanyStatistic extends EditRecord
{
    protected static string $resource = CompanyStatisticResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
