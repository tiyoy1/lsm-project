<?php

namespace App\Filament\Resources\StudentWorks\Pages;

use App\Filament\Resources\StudentWorks\StudentWorkResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;

class ManageStudentWorks extends ManageRecords
{
    protected static string $resource = StudentWorkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
