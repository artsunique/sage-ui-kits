<?php

namespace SageUiKits;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SageUiKitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Registriert Views mit Namespace "sage-ui", z. B. sage-ui::components.text
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sage-ui');

        // Registriert PHP-Klassen (wie Text.php) im Blade-Namespace "sage-ui"
        Blade::componentNamespace('SageUiKits\\Components', 'sage-ui');
    }
}
