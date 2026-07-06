<?php

namespace App\Filament\Widgets;

use App\Models\Document;
use Filament\Widgets\ChartWidget;

class DocumentTypeChart extends ChartWidget
{
    protected ?string $heading = 'Documents by Type';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = Document::selectRaw('type, count(*) as count')
            ->groupBy('type')
            ->pluck('count', 'type')
            ->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Documents',
                    'data' => array_values($data),
                    'backgroundColor' => ['#ef4444', '#8b5cf6', '#06b6d4'],
                ],
            ],
            'labels' => array_map('strtoupper', array_keys($data)),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
