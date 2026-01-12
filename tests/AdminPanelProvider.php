<?php

namespace Xlited\FilamentNavigation\Tests;

use Filament\Panel;
use Filament\PanelProvider;
use Xlited\FilamentNavigation\FilamentNavigation;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->plugin(FilamentNavigation::make());
    }
}
