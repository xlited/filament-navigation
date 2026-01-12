<?php

namespace Xlited\FilamentNavigation\Filament\Resources\NavigationResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Xlited\FilamentNavigation\Filament\Resources\NavigationResource\Pages\Concerns\HandlesNavigationBuilder;
use Xlited\FilamentNavigation\FilamentNavigation;

class CreateNavigation extends CreateRecord
{
    use HandlesNavigationBuilder;

    protected ?array $mountedActionData = null;

    public static function getResource(): string
    {
        return FilamentNavigation::get()->getResource();
    }
}
