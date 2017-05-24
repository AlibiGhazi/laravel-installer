<?php

namespace AlibiGhazi\Installer;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class InstallerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/Http/routes.php';
        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/alibighazi/installer'),
        ], 'views');
        $this->publishes([
            __DIR__.'/config'=> config_path(),
        ], 'config');
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/installer'),
        ], 'public');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('AlibiGhazi\Installer\Http\Controllers\InstallerController');
        $this->loadViewsFrom(__DIR__.'/views', 'installer');
        $this->mergeConfigFrom(__DIR__ . '/config/installer.php', 'installer');
        $this->app->register('Brotzka\DotenvEditor\DotenvEditorServiceProvider');
        AliasLoader::getInstance()->alias('DotenvEditor', 'Brotzka\DotenvEditor\DotenvEditorFacade');

    }
}
