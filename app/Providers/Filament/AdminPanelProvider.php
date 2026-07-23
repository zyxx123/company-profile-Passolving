<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Filament\Widgets\FilamentInfoWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login(\App\Filament\Pages\Auth\CustomLogin::class)
            ->colors([
                'primary' => Color::hex('#00a6a6'), // Teal (Main Primary)
                'info' => Color::hex('#081f5b'),    // Dark Blue
                'warning' => Color::hex('#f5c242'), // Yellow CTA
                'danger' => Color::Rose,
                'success' => Color::Emerald,
                'gray' => Color::Zinc,
            ])
            ->font('Inter')
            ->renderHook(
                \Filament\View\PanelsRenderHook::HEAD_END,
                fn (): string => \Illuminate\Support\Facades\Blade::render('@vite([\'resources/css/admin-theme.css\'])')
            )
            ->brandName('PASSolving')
            ->darkMode(false)
            ->brandLogo(asset('logo-black-trimmed.png'))
            ->brandLogoHeight('2.5rem')
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\Filament\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\Filament\Pages')
            ->pages([
                Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\Filament\Widgets')
            ->widgets([
                AccountWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }

    public function boot(): void
    {
        \Filament\Support\Facades\FilamentView::registerRenderHook(
            \Filament\View\PanelsRenderHook::HEAD_END,
            fn (): string => \Illuminate\Support\Facades\Blade::render("@vite('resources/css/app.css')") . new \Illuminate\Support\HtmlString('
                <style>
                    /* PASSolving DESIGN.md Custom Overrides for Admin */
                    
                    /* Typography & Font Colors */
                    html, body, .fi-body, .fi-main, h1, h2, h3, h4, h5, h6, p, span, a, input, button, textarea, select {
                        font-family: "Poppins", ui-sans-serif, system-ui, sans-serif !important;
                    }

                    /* Background & General Text */
                    .fi-body, .fi-main {
                        background-color: #F8FAFB !important;
                        color: #6B7280 !important;
                    }

                    /* Headings (Page titles, etc) */
                    h1, h2, h3, h4, h5, h6, 
                    .fi-header-heading, 
                    .fi-ta-header-heading {
                        color: #1F2937 !important;
                        font-weight: 800 !important;
                    }

                    /* Form Labels & Table Headers */
                    .fi-fo-field-wrp-label span, 
                    th.fi-ta-header-cell span {
                        color: #1F2937 !important;
                        font-weight: 700 !important;
                    }

                    /* Card Headings & Stats */
                    .fi-wi-stats-overview-stat-label {
                        color: #141414 !important;
                        font-weight: 700 !important;
                        text-transform: uppercase !important;
                        letter-spacing: 0.05em !important;
                    }
                    .fi-wi-stats-overview-stat-value {
                        color: #1F2937 !important;
                        font-weight: 900 !important;
                    }

                    /* Table & Card Text */
                    td.fi-ta-cell, 
                    .fi-ta-text-item {
                        color: #585857 !important;
                    }

                    /* Dominant Teal Sidebar */
                    aside.fi-sidebar, .fi-sidebar-header {
                        background-color: #00a6a6 !important;
                        border-right: none !important;
                        border-bottom: 1px solid rgba(255, 255, 255, 0.1) !important;
                    }
                    /* Force logo to be white on the Teal sidebar */
                    .fi-sidebar-header img {
                        filter: brightness(0) invert(1) !important;
                    }
                    .fi-sidebar-item-label, .fi-sidebar-item-icon, .fi-sidebar-group-label {
                        color: rgba(255, 255, 255, 0.9) !important;
                    }
                    .fi-sidebar-item-active {
                        background-color: #081f5b !important;
                        border-radius: 14px !important;
                    }
                    .fi-sidebar-item-active .fi-sidebar-item-label, .fi-sidebar-item-active .fi-sidebar-item-icon {
                        color: #ffffff !important;
                    }

                    /* Dominant Teal Topbar */
                    .fi-topbar {
                        background-color: #00a6a6 !important;
                        border-bottom: none !important;
                    }
                    .fi-topbar .fi-icon-btn, 
                    .fi-topbar .fi-topbar-item-label, 
                    .fi-topbar .fi-breadcrumbs-item-label,
                    .fi-topbar .fi-breadcrumbs-item-separator,
                    .fi-topbar .text-gray-500,
                    .fi-topbar .fi-header-heading {
                        color: rgba(255, 255, 255, 0.95) !important;
                    }
                    .fi-topbar .fi-icon-btn:hover {
                        color: #ffffff !important;
                        background-color: rgba(255, 255, 255, 0.1) !important;
                    }
                    
                    /* Cards (Radius 24px, Soft shadow) */
                    .fi-ta-content, 
                    .fi-wi-stats-overview-stat, 
                    .fi-fo-wizard,
                    section.fi-section {
                        border-radius: 24px !important;
                        box-shadow: 0 20px 40px rgba(0,0,0,.06) !important;
                        border: 1px solid #E5E7EB !important;
                        background-color: #FFFFFF !important;
                    }
                    
                    /* Buttons (Radius 14px) */
                    .fi-btn {
                        border-radius: 14px !important;
                    }
                    .fi-btn-color-primary {
                        box-shadow: 0 10px 25px rgba(244,180,0,.20) !important;
                    }
                    
                    /* Inputs (Radius 14px) */
                    .fi-input-wrapper, 
                    .fi-select-wrapper {
                        border-radius: 14px !important;
                    }
                </style>
            '),
        );
    }
}
