<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class WelcomeAdminWidget extends Widget
{
    protected string $view = 'filament.widgets.welcome-admin-widget';
    
    protected int | string | array $columnSpan = 'full';
    
    // Position it at the very top
    protected static ?int $sort = -10;
}
