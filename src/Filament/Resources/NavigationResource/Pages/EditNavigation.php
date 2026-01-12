<?php

namespace Xlited\FilamentNavigation\Filament\Resources\NavigationResource\Pages;

use Filament\Resources\Pages\EditRecord;
use Xlited\FilamentNavigation\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use Xlited\FilamentNavigation\FilamentNavigation;
use Xlited\FilamentNavigation\Traits\FixesLivewireErrorBag;

class EditNavigation extends EditRecord
{
    use HandlesNavigationBuilder;
    use FixesLivewireErrorBag;

    public static function getResource(): string
    {
        return FilamentNavigation::get()->getResource();
    }
}
