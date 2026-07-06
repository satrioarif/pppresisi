<?php

namespace App\Filament\Widgets;

use App\Models\Project;
use Filament\Widgets\ChartWidget;

class ProjectStatusChart extends ChartWidget
{
    protected ?string $heading = 'Projects by Status';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $data = Project::selectRaw('status, count(*) as count')
            ->groupBy('status')
            ->pluck('count', 'status')
            ->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Projects',
                    'data' => array_values($data),
                    'backgroundColor' => ['#10b981', '#f59e0b', '#3b82f6'],
                ],
            ],
            'labels' => array_map('ucfirst', array_keys($data)),
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
