<?php
namespace Stepanenko3\LaravelRuntimeConfig\Facades;

use Illuminate\Support\Facades\Facade;

class RuntimeConfig extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() : string
    {
        return \Stepanenko3\LaravelRuntimeConfig\RuntimeConfig::class;
    }
}
