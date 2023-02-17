<?php

namespace Bootsetrap\Bootsetrapmd;

use Illuminate\Support\ServiceProvider;

class Bootsetrapmd extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../Controllers' => app_path('Http/Controllers'),
        ], 'bootsetrap');
        $this->publishes([
            __DIR__ . '/../Models' => app_path('Models'),
        ], 'bootsetrap');
        $this->publishes([
            __DIR__ . '/../migrations' => database_path('migrations'),
        ], 'bootsetrap');
        $this->publishes([
            __DIR__ . '/../routes/web.php' => public_path('routes/web.php'),
        ], 'bootsetrap');
        $this->publishes([
            __DIR__ . '/../views' => resource_path('views'),
        ], 'bootsetrap');
    }
}
