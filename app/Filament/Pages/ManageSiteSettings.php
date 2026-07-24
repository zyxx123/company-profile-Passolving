<?php

namespace App\Filament\Pages;

use App\Models\SiteSetting;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;

class ManageSiteSettings extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'Site Settings';

    protected static ?string $title = 'Site Settings';

    protected string $view = 'filament.pages.manage-site-settings';

    // Form state
    public ?array $data = [];

    /**
     * Keys managed by this settings page.
     */
    protected array $settingKeys = [
        'phone',
        'email',
        'address',
        'operational_hours',
        'maps_embed_url',
        'linkedin_url',
        'instagram_url',
        'youtube_url',
        'facebook_url',
        'threads_url',
        'tagline',
    ];

    public function mount(): void
    {
        $settings = SiteSetting::whereIn('key', $this->settingKeys)
            ->pluck('value', 'key')
            ->toArray();

        $this->form->fill($settings);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Contact Information')
                    ->schema([
                        TextInput::make('phone')
                            ->label('Phone / WhatsApp')
                            ->placeholder('+62 897 9515 205'),
                        TextInput::make('email')
                            ->email()
                            ->placeholder('bersama@passolving.com'),
                        TextInput::make('address')
                            ->placeholder('Jl. P.P.A No.24 ...'),
                        TextInput::make('operational_hours')
                            ->placeholder('Senin - Jumat, 09:00 - 17:00 WIB'),
                        TextInput::make('maps_embed_url')
                            ->label('Google Maps Embed URL')
                            ->url()
                            ->columnSpanFull(),
                    ])
                    ->columns(2),

                Section::make('Social Media')
                    ->schema([
                        TextInput::make('linkedin_url')
                            ->label('LinkedIn')
                            ->url(),
                        TextInput::make('instagram_url')
                            ->label('Instagram')
                            ->url(),
                        TextInput::make('youtube_url')
                            ->label('YouTube')
                            ->url(),
                        TextInput::make('facebook_url')
                            ->label('Facebook')
                            ->url(),
                        TextInput::make('threads_url')
                            ->label('Threads')
                            ->url(),
                    ])
                    ->columns(2),

                Section::make('Company')
                    ->schema([
                        TextInput::make('tagline')
                            ->label('Footer Tagline')
                            ->placeholder('Partner strategis Anda ...')
                            ->columnSpanFull(),
                    ]),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Settings')
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        foreach ($this->settingKeys as $key) {
            SiteSetting::updateOrCreate(
                ['key' => $key],
                ['value' => $data[$key] ?? null],
            );
        }

        Notification::make()
            ->title('Settings saved successfully')
            ->success()
            ->send();
    }
}
