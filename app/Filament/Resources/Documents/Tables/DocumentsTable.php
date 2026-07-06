<?php

namespace App\Filament\Resources\Documents\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;

class DocumentsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->limit(50),
                TextColumn::make('type')
                    ->badge()
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'report'        => 'Financial Report',
                        'presentation'  => 'Corporate Presentation',
                        'rups'          => 'RUPS / GMS',
                        'prospectus'    => 'Prospectus',
                        'gcg'           => 'GCG Guideline',
                        'miscellaneous' => 'Miscellaneous',
                        default         => ucfirst($state),
                    })
                    ->color(fn ($state) => match ($state) {
                        'report'        => 'info',
                        'presentation'  => 'warning',
                        'rups'          => 'success',
                        'prospectus'    => 'danger',
                        'gcg'           => 'gray',
                        default         => 'gray',
                    })
                    ->searchable(),
                TextColumn::make('category')
                    ->label('Category')
                    ->badge()
                    ->formatStateUsing(fn ($state) => match ($state) {
                        'annual'    => 'Annual',
                        'financial' => 'Financial',
                        default     => $state ?? '—',
                    })
                    ->color(fn ($state) => match ($state) {
                        'annual'    => 'success',
                        'financial' => 'info',
                        default     => 'gray',
                    })
                    ->sortable(),
                TextColumn::make('sub_type')
                    ->label('Sub-Type')
                    ->searchable()
                    ->placeholder('—'),
                TextColumn::make('year')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('type')
                    ->options([
                        'report'        => 'Financial Report',
                        'presentation'  => 'Corporate Presentation',
                        'rups'          => 'RUPS / GMS',
                        'prospectus'    => 'Prospectus',
                        'gcg'           => 'GCG Guideline',
                        'miscellaneous' => 'Miscellaneous',
                    ]),
                SelectFilter::make('category')
                    ->label('Report Category')
                    ->options([
                        'annual'    => 'Annual Reports',
                        'financial' => 'Financial Reports',
                    ]),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('year', 'desc');
    }
}
