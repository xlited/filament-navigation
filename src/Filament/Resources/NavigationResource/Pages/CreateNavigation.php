<?php

namespace Xlited\FilamentNavigation\Filament\Resources\NavigationResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Xlited\FilamentNavigation\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use Xlited\FilamentNavigation\FilamentNavigation;
use Xlited\FilamentNavigation\Traits\FixesLivewireErrorBag;

class CreateNavigation extends CreateRecord
{
    use HandlesNavigationBuilder;
    use FixesLivewireErrorBag;

    public static function getResource(): string
    {
        return FilamentNavigation::get()->getResource();
    }
}
