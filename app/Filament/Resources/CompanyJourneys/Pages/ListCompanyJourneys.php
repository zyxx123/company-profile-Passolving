<?php

namespace App\Filament\Resources\CompanyJourneys\Pages;

use App\Filament\Resources\CompanyJourneys\CompanyJourneyResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListCompanyJourneys extends ListRecords
{
    protected static string $resource = CompanyJourneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
