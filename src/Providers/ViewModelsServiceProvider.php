<?php

namespace CodicaStudio\ViewModels\Providers;

use Illuminate\Support\ServiceProvider;
use CodicaStudio\ViewModels\Console\ViewModelMakeCommand;

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
