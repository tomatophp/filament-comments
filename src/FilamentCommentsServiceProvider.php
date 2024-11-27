<?php

namespace TomatoPHP\FilamentComments;

use Illuminate\Support\ServiceProvider;


class FilamentCommentsServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //Register generate command
        $this->commands([
           \TomatoPHP\FilamentComments\Console\FilamentCommentsInstall::class,
        ]);
 
        //Register Config file
        $this->mergeConfigFrom(__DIR__.'/../config/filament-comments.php', 'filament-comments');
 
        //Publish Config
        $this->publishes([
           __DIR__.'/../config/filament-comments.php' => config_path('filament-comments.php'),
        ], 'filament-comments-config');
 
        //Register Migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
 
        //Publish Migrations
        $this->publishes([
           __DIR__.'/../database/migrations' => database_path('migrations'),
        ], 'filament-comments-migrations');
        //Register views
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'filament-comments');
 
        //Publish Views
        $this->publishes([
           __DIR__.'/../resources/views' => resource_path('views/vendor/filament-comments'),
        ], 'filament-comments-views');
 
        //Register Langs
        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'filament-comments');
 
        //Publish Lang
        $this->publishes([
           __DIR__.'/../resources/lang' => base_path('lang/vendor/filament-comments'),
        ], 'filament-comments-lang');
 
        //Register Routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
 
    }

    public function boot(): void
    {
        //you boot methods here
    }
}
