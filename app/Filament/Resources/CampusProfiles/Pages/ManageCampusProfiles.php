<?php

namespace App\Filament\Resources\CampusProfiles\Pages;

use App\Filament\Resources\CampusProfiles\CampusProfileResource;
use App\Models\CampusProfile;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageCampusProfiles extends ManageRecords
{
    protected static string $resource = CampusProfileResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->visible(fn (): bool => CampusProfile::query()->count() === 0),
        ];
    }
}
