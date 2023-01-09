<?php

namespace App\Providers;

use App\Console\Commands\OperationsCommand;
use App\Services\MathService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.operations', function () {
            return new OperationsCommand(new MathService);
        });
        $this->app->singleton('mathService', function () {
            return new MathService();
        });

        $this->commands([
            'command.operations',
        ]);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
