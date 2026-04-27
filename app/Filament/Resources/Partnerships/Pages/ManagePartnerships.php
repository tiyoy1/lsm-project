<?php

namespace App\Filament\Resources\Partnerships\Pages;

use App\Filament\Resources\Partnerships\PartnershipResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManagePartnerships extends ManageRecords
{
    protected static string $resource = PartnershipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
