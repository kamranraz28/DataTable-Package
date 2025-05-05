<?php

namespace Kamran\DataTable;

use Illuminate\Support\ServiceProvider;

class KamranDataTableServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/assets', 'kamran-datatable');
        $this->publishes([
            __DIR__ . '/assets' => public_path('vendor/kamran-datatable'),
        ], 'public');
    }

    public function register()
    {
        //
    }
}
