<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                \Filament\Forms\Components\Select::make('type')
                    ->options([
                        'report' => 'Financial Report',
                        'presentation' => 'Corporate Presentation',
                        'rups' => 'RUPS / GMS',
                        'prospectus' => 'Prospectus',
                        'gcg' => 'GCG Guideline',
                    ])
                    ->required(),
                \Filament\Forms\Components\FileUpload::make('file_path')
                    ->acceptedFileTypes(['application/pdf'])
                    ->required(),
                TextInput::make('year')
                    ->numeric(),
                Textarea::make('description')
                    ->columnSpanFull(),
            ]);
    }
}
