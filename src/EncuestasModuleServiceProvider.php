<?php

namespace Asimov\Solaria\Modules\Encuestas;

use Illuminate\Support\ServiceProvider;
use Route;

class EncuestasModuleServiceProvider extends ServiceProvider{

    public function boot(){
        $this->registerRoutes();
        $this->registerViews();
        $this->publishMigrationsAndSeeds();
        $this->publishAssets();
    }

    /**
     * Registra una instancia del modulo en la aplicacion
     *
     * @return void
     */
    public function register() {
        $moduleLoader = $this->app->make('solaria.moduleloader');
        $moduleLoader->add(new Encuestas());
    }

    /**
     * Registra las rutas del modulo
     */
    private function registerRoutes() {
        Route::group(['middleware' => 'auth', 'namespace' => 'Asimov\Solaria\Modules\Encuestas\Http\Controllers'], function() {
            Route::controller('/backend/modules/encuestas', 'EncuestasController');
        });
    }

    /**
     * Registra las vistas del modulo
     */
    private function registerViews() {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'moduleencuestas');
    }

    /**
     * Publica las migraciones del modulo
     */
    private function publishMigrationsAndSeeds() {
        $this->publishes([
            __DIR__ . '/database/migrations/' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Publica los assets del modulo
     */
    private function publishAssets(){
        $this->publishes([
            __DIR__ . '/public/' => public_path('modules/encuestas')
        ], 'assets');
    }
}