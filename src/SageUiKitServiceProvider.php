<?php

namespace SageUiKits;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SageUiKitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Registriert die Views mit Namespace (wird nur intern benötigt)
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sage-ui');

        // Registriert alle Komponenten **ohne** Prefix: <x-text>, <x-button> etc.
        Blade::componentNamespace('SageUiKits\\Components', '');
    }
}
