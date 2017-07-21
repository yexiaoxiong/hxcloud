<?php

namespace Hxcloud\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Hxcloud\Modules\Commands\CommandCommand;
use Hxcloud\Modules\Commands\ControllerCommand;
use Hxcloud\Modules\Commands\GenerateMiddlewareCommand;
use Hxcloud\Modules\Commands\GenerateProviderCommand;
use Hxcloud\Modules\Commands\GenerateRouteProviderCommand;
use Hxcloud\Modules\Commands\MakeCommand;
use Hxcloud\Modules\Commands\MakeRequestCommand;
use Hxcloud\Modules\Commands\PublishConfigurationCommand;
use Hxcloud\Modules\Commands\UseCommand;

class ConsoleServiceProvider extends ServiceProvider
{
    protected $defer = false;

    /**
     * The available commands
     *
     * @var array
     */
    protected $commands = [
        MakeCommand::class,
        CommandCommand::class,
        ControllerCommand::class,
        GenerateMiddlewareCommand::class,
        GenerateProviderCommand::class,
        GenerateRouteProviderCommand::class,
        UseCommand::class,
        MakeRequestCommand::class,
        PublishConfigurationCommand::class,
    ];

    /**
     * Register the commands.
     */
    public function register()
    {
        $this->commands($this->commands);
    }

    /**
     * @return array
     */
    public function provides()
    {
        $provides = $this->commands;

        return $provides;
    }
}
