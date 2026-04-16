<?php

namespace App\Filament\Resources\CampusHistories\Pages;

use App\Filament\Resources\CampusHistories\CampusHistoryResource;
use App\Models\CampusHistory;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageCampusHistories extends ManageRecords
{
    protected static string $resource = CampusHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->visible(fn (): bool => CampusHistory::query()->count() === 0),
        ];
    }
}
