<?php

namespace codicastudio\ViewModels\Providers;

use Illuminate\Support\ServiceProvider;
use codicastudio\ViewModels\Console\ViewModelMakeCommand;

class ViewModelsServiceProvider extends ServiceProvider
{
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ViewModelMakeCommand::class,
            ]);
        }
    }
}
