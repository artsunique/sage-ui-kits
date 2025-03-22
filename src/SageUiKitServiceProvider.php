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

        // Registriere Blade-Komponenten
        Blade::component('SageUiKits\\Components\\Text', 'text');
        Blade::component('SageUiKits\\Components\\Date', 'date');
        Blade::component('SageUiKits\\Components\\Link', 'link');
        Blade::component('SageUiKits\\Components\\Copyright', 'copyright');
        Blade::component('SageUiKits\\Components\\Progress', 'progress');

        // Views publishable
        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/sage-ui'),
        ], 'sage-ui-kits');

        // JS publishable
        $this->publishes([
            __DIR__.'/../resources/js' => resource_path('scripts/vendor/sage-ui'),
        ], 'sage-ui-kits-js');

        // Automatisches Kopieren zusätzlicher Dateien ins Theme
        if (function_exists('get_template') && function_exists('get_theme_root')) {
            $themeDir = get_theme_root() . '/' . get_template();

            // 1. README kopieren
            $readmeSource = __DIR__ . '/../SAGE-UI.md';
            $readmeTarget = $themeDir . '/sage-ui-readme.md';

            if (file_exists($readmeSource) && !file_exists($readmeTarget)) {
                @copy($readmeSource, $readmeTarget);
            }

            // 2. progress.mjs kopieren + app.js anpassen
            $jsSource = __DIR__ . '/../resources/js/progress.mjs';
            $componentDir = $themeDir . '/resources/scripts/components';
            $jsTarget = $componentDir . '/progress.mjs';

            if (file_exists($jsSource)) {
                if (!is_dir($componentDir)) {
                    @mkdir($componentDir, 0777, true);
                }

                if (!file_exists($jsTarget)) {
                    @copy($jsSource, $jsTarget);
                }

                // app.js erweitern
                $appJsPath = $themeDir . '/resources/scripts/app.js';

                // Ordner anlegen, falls nicht vorhanden
                if (!is_dir(dirname($appJsPath))) {
                    @mkdir(dirname($appJsPath), 0777, true);
                }

                // Datei anlegen, wenn sie fehlt
                if (!file_exists($appJsPath)) {
                    file_put_contents($appJsPath, "// Sage UI app.js\n");
                }

                // Import + Aufruf einfügen, falls nicht vorhanden
                $appJs = file_get_contents($appJsPath);
                $importStatement = "import { ProgressBar } from './components/progress.mjs';";
                $callStatement = "ProgressBar();";

                if (!str_contains($appJs, $importStatement)) {
                    $appJs = $importStatement . "\n" . $appJs;
                }

                if (!str_contains($appJs, $callStatement)) {
                    $appJs .= "\n\n" . $callStatement . "\n";
                }

                file_put_contents($appJsPath, $appJs);
            }
        }

        // Debug (optional)
        // \Illuminate\Support\Facades\Log::info('✅ SageUiKitServiceProvider booted');
    }
}
