<?php
use SageUiKits\SageUiKitServiceProvider;

class ThemeServiceProvider extends SageServiceProvider
{
    public function register()
    {
        parent::register();
        $this->app->register(SageUiKitServiceProvider::class);
    }
}
