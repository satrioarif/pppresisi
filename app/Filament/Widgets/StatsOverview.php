<?php

namespace App\Filament\Widgets;

use App\Models\Contact;
use App\Models\Document;
use App\Models\News;
use App\Models\Project;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Projects', Project::count())
                ->description('All projects')
                ->descriptionIcon('heroicon-m-briefcase')
                ->color('primary'),
            Stat::make('Total Documents', Document::count())
                ->description('All uploaded documents')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('success'),
            Stat::make('Total News', News::count())
                ->description('All published news')
                ->descriptionIcon('heroicon-m-newspaper')
                ->color('info'),
            Stat::make('Total Contacts', Contact::count())
                ->description('Messages received')
                ->descriptionIcon('heroicon-m-envelope')
                ->color('warning'),
        ];
    }
}
