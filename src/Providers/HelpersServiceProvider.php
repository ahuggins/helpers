<?php

namespace AHuggins\Helpers\Providers;

use Illuminate\Support\ServiceProvider;

class HelpersServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../helpers.php' => base_path('helpers.php'),
        ], 'helpers');
    }

    public function register()
    {
        if (file_exists(base_path('helpers.php'))) {
            require base_path('helpers.php');
        }
    }
}
