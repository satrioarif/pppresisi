<?php

namespace App\Filament\Resources\Documents\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DocumentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull(),

                Select::make('type')
                    ->options([
                        'report'         => 'Financial Report',
                        'presentation'   => 'Corporate Presentation',
                        'rups'           => 'RUPS / GMS',
                        'prospectus'     => 'Prospectus',
                        'capital_market' => 'Capital Market (Regulatory Fillings)',
                        'transparency'   => 'Transparency of Information',
                        'code_of_conduct'=> 'Code of Conduct',
                        'charters'       => 'Charters',
                        'committees'     => 'Committees',
                        'internal_audit' => 'Internal Audit Unit',
                        'whistleblowing' => 'Whistleblowing System',
                        'miscellaneous'  => 'Miscellaneous',
                    ])
                    ->required()
                    ->live(),

                Select::make('category')
                    ->label('Report Category')
                    ->options([
                        'annual'         => 'Annual Report',
                        'sustainability' => 'Sustainability Report',
                        'financial'      => 'Financial Report',
                    ])
                    ->visible(fn ($get) => $get('type') === 'report')
                    ->live()
                    ->required(fn ($get) => $get('type') === 'report'),

                TextInput::make('sub_type')
                    ->label(fn ($get) => $get('type') === 'presentation' ? 'Sub-Kategori Presentasi' : 'Sub-Type / Laporan')
                    ->visible(fn ($get) =>
                        $get('type') === 'presentation' ||
                        (in_array($get('type'), ['report']) && $get('category') !== null)
                    )
                    ->required(fn ($get) =>
                        $get('type') === 'presentation' ||
                        ($get('type') === 'report' && $get('category') !== null)
                    ),

                TextInput::make('year')
                    ->numeric()
                    ->required(),

                FileUpload::make('file_path')
                    ->label('File (PDF)')
                    ->acceptedFileTypes(['application/pdf'])
                    ->required()
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
