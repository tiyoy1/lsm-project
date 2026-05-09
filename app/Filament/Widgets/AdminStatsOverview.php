<?php

namespace App\Filament\Widgets;

use App\Models\News;
use App\Models\Registration;
use App\Models\Student;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminStatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pending student', Registration::where('status', 'pending')->count()),
            Stat::make('Jumlah student', Student::count()),
            Stat::make('Berita dibuat', News::count()),
        ];
    }
}
