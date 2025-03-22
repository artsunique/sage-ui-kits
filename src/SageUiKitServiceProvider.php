<?php

namespace SageUiKits;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SageUiKitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Namespace für Views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sage-ui');

        // Blade-Komponenten registrieren
        Blade::component('SageUiKits\\Components\\Text', 'text');
        Blade::component('SageUiKits\\Components\\Date', 'date');
        Blade::component('SageUiKits\\Components\\Link', 'link');
        Blade::component('SageUiKits\\Components\\Copyright', 'copyright');
        Blade::component('SageUiKits\\Components\\Progress', 'progress');

        // Views publishable
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/sage-ui'),
        ], 'sage-ui-kits');

        // JS-Dateien publishable
        $this->publishes([
            __DIR__.'/../resources/js' => resource_path('scripts/vendor/sage-ui'),
        ], 'sage-ui-kits-js');

        // Autokopie von README.md und progress.mjs ins Theme
        if (function_exists('get_template') && function_exists('get_theme_root')) {
            $themeDir = get_theme_root() . '/' . get_template();

            // README automatisch kopieren
            $readmeSource = __DIR__ . '/../SAGE-UI.md';
            $readmeTarget = $themeDir . '/sage-ui-readme.md';

            if (file_exists($readmeSource) && !file_exists($readmeTarget)) {
                @copy($readmeSource, $readmeTarget);
            }

            // progress.mjs automatisch kopieren
            // progress.mjs automatisch in components/ kopieren und app.js anpassen
            $jsSource = __DIR__ . '/../resources/js/progress.mjs';
            $componentDir = $themeDir . '/resources/scripts/components';
            $jsTarget = $componentDir . '/progress.mjs';

            if (file_exists($jsSource) && !file_exists($jsTarget)) {
                @mkdir($componentDir, 0777, true);
                @copy($jsSource, $jsTarget);

                // app.js erweitern
                $appJsPath = $themeDir . '/resources/scripts/app.js';
                if (file_exists($appJsPath)) {
                    $appJs = file_get_contents($appJsPath);

                    $importStatement = "import { ProgressBar } from './components/progress.mjs';";
                    $callStatement = "ProgressBar();";

                    // nur einfügen, wenn nicht schon vorhanden
                    if (!str_contains($appJs, $importStatement)) {
                        $appJs = $importStatement . "\n" . $appJs;
                    }

                    if (!str_contains($appJs, $callStatement)) {
                        $appJs .= "\n\n" . $callStatement . "\n";
                    }

                    file_put_contents($appJsPath, $appJs);
                }
            }
        }
    }
}
