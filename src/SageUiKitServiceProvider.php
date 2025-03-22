<?php

namespace SageUiKits;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class SageUiKitServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sage-ui');

        Blade::components([
            'text' => \SageUiKits\Components\Text::class,
            'date' => \SageUiKits\Components\Date::class,
        ]);
    }
}
