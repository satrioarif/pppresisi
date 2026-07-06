<?php

namespace App\Filament\Pages;

use App\Models\Setting;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Section;

class CompanyProfileSettings extends Page implements HasForms
{
    use InteractsWithForms;

    public static function getNavigationIcon(): ?string
    {
        return 'heroicon-o-document-text';
    }
    
    public static function getNavigationGroup(): ?string
    {
        return 'Settings';
    }

    protected string $view = 'filament.pages.company-profile-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill([
            'company_profile_en_url' => Setting::where('key', 'company_profile_en_url')->value('value'),
            'company_profile_id_url' => Setting::where('key', 'company_profile_id_url')->value('value'),
        ]);
    }

    public function form(Schema $form): Schema
    {
        return $form
            ->components([
                Section::make('Upload Company Profile PDFs')
                    ->description('Upload the latest company profile documents here. These will be available for download on the About Us page.')
                    ->components([
                        FileUpload::make('company_profile_en_url')
                            ->label('Company Profile (English)')
                            ->directory('company-profiles')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(51200) // 50MB
                            ->downloadable(),
                        FileUpload::make('company_profile_id_url')
                            ->label('Company Profile (Indonesia)')
                            ->directory('company-profiles')
                            ->acceptedFileTypes(['application/pdf'])
                            ->maxSize(51200)
                            ->downloadable(),
                    ])
            ])
            ->statePath('data');
    }

    public function save(): void
    {
        $data = $this->form->getState();

        Setting::updateOrCreate(
            ['key' => 'company_profile_en_url'],
            ['value' => $data['company_profile_en_url']]
        );

        Setting::updateOrCreate(
            ['key' => 'company_profile_id_url'],
            ['value' => $data['company_profile_id_url']]
        );

        Notification::make()
            ->success()
            ->title('Settings Saved')
            ->send();
    }
}
