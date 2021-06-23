<?php

namespace Khapu\LaravelCurd\Providers;

use Illuminate\Support\ServiceProvider;

class CurdServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        
        $modulePath = __DIR__.'/../../';
        $moduleName = 'Khapu';
        $this->loadRoutesFrom($modulePath."/routes/package.php");
        $this->loadViewsFrom($modulePath.'resources/views',$moduleName);
        $this->loadMigrationsFrom($modulePath.'/database/migrations');
        
        //
    }

    public function register()
    {
        
    }
}
