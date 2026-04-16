<?php

namespace App\Filament\Widgets;

use App\Models\Career;
use App\Models\News;
use App\Models\Partnership;
use App\Models\Testimonial;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class AdminStatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Karir (LPK)', Career::where('track', 'lpk')->count()),
            Stat::make('Karir (LKP)', Career::where('track', 'lkp')->count()),
            Stat::make('Berita terbit', News::published()->count()),
            Stat::make('Testimoni publish', Testimonial::where('is_published', true)->count()),
            Stat::make('Kerja sama aktif', Partnership::where('is_active', true)->count()),
        ];
    }
}
