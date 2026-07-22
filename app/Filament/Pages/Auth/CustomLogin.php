<?php

namespace App\Filament\Pages\Auth;

use Filament\Auth\Pages\Login as BaseLogin;

class CustomLogin extends BaseLogin
{
    protected string $view = 'filament.pages.auth.custom-login';

    public function getLayout(): string
    {
        return 'filament-panels::components.layout.base';
    }
}
