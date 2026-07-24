<?php

namespace App\Filament\Resources\CompanyJourneys\Pages;

use App\Filament\Resources\CompanyJourneys\CompanyJourneyResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCompanyJourney extends EditRecord
{
    protected static string $resource = CompanyJourneyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
