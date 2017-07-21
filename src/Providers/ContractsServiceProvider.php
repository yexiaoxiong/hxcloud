<?php

namespace Hxcloud\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Hxcloud\Modules\Contracts\RepositoryInterface;
use Hxcloud\Modules\Repository;

class ContractsServiceProvider extends ServiceProvider
{
    /**
     * Register some binding.
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, Repository::class);
    }
}
