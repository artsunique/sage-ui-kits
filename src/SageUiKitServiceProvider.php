<?php

namespace SageUiKits;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SageUiKitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Blade-View-Namespace
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sage-ui');

        // Blade-Komponenten registrieren
        Blade::component('SageUiKits\\Components\\Text', 'text');
        Blade::component('SageUiKits\\Components\\Date', 'date');
        Blade::component('SageUiKits\\Components\\Link', 'link');
        Blade::component('SageUiKits\\Components\\Copyright', 'copyright');
        Blade::component('SageUiKits\\Components\\Progress', 'progress');
        Blade::component('SageUiKits\\Components\\Wrapper', 'wrapper');
        Blade::component('SageUiKits\\Components\\Menu', 'menu');
        Blade::component('SageUiKits\\Components\\Excerpt', 'excerpt');
        Blade::component('SageUiKits\\Components\\Darkmode', 'darkmode');
        Blade::component('SageUiKits\\Components\\Skip', 'skip-to-content');

        // Views publishable
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/sage-ui'),
        ], 'sage-ui-kits');

        // JS-Dateien publishable
        $this->publishes([
            __DIR__.'/../resources/js' => resource_path('scripts/vendor/sage-ui'),
        ], 'sage-ui-kits-scripts');

        // Automatischer Kopiervorgang bei Theme-Aktivierung
        if (function_exists('get_template') && function_exists('get_theme_root')) {
            $themeDir = get_theme_root() . '/' . get_template();

            $this->registerAssets([
                __DIR__ . '/../SAGE-UI.md'                       => $themeDir . '/sage-ui-readme.md',
                __DIR__ . '/../resources/js/progress.mjs'        => $themeDir . '/resources/scripts/vendor/sage-ui/progress.mjs',
                __DIR__ . '/../resources/js/darkmode.mjs'        => $themeDir . '/resources/scripts/vendor/sage-ui/darkmode.mjs',
            ]);
        }
    }

    /**
     * Kopiert mehrere Assets bei Bedarf
     *
     * @param array $assets [quelle => ziel]
     */
    protected function registerAssets(array $assets): void
    {
        foreach ($assets as $source => $target) {
            $this->copyAssetIfNotExists($source, $target);
        }
    }

    /**
     * Kopiert eine Datei, wenn Ziel nicht existiert
     */
    protected function copyAssetIfNotExists(string $source, string $target): void
    {
        if (file_exists($source) && !file_exists($target)) {
            @mkdir(dirname($target), 0777, true);
            @copy($source, $target);
        }
    }
}
