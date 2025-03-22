<?php

namespace SageUiKits;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SageUiKitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Lade Views mit Namespace 'sage-ui'
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sage-ui');

        // Registriere Blade-Komponenten ohne Prefix
        Blade::component('SageUiKits\\Components\\Text', 'text');
        Blade::component('SageUiKits\\Components\\Date', 'date');
        Blade::component('SageUiKits\\Components\\Link', 'link');
        Blade::component('SageUiKits\\Components\\Copyright', 'copyright');

        // Optional: Views publishable via tag
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/sage-ui'),
        ], 'sage-ui-kits');

        // Automatisches Kopieren von README.md ins aktuelle Theme-Verzeichnis (nur wenn nicht vorhanden)
        if (function_exists('get_template') && function_exists('get_theme_root')) {
            $readmeSource = __DIR__ . '/../SAGE-UI.md';
            $themeDir = get_theme_root() . '/' . get_template();
            $readmeTarget = $themeDir . '/sage-ui-readme.md';

            if (file_exists($readmeSource) && !file_exists($readmeTarget)) {
                @copy($readmeSource, $readmeTarget);
            }
        }
    }
}
