<?php

namespace SageUiKits;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SageUiKitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Views registrieren – wichtig für render() view()
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'sage-ui');

        // Ohne Prefix: <x-text>
        Blade::component('SageUiKits\\Components\\Text', 'text');
    }
}
