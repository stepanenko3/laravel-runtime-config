<?php

use Stepanenko3\LaravelRuntimeConfig\Facades\RuntimeConfig;

if (!function_exists('runtime_config')) {
    /**
     * runtime_config
     *
     * @param  string|null $key
     * @param  string|null $default
     * @return mixed
     */
    function runtime_config(string|null $key = null, string|null $default = null)
    {
        if ($key === null) {
            return RuntimeConfig::all();
        }

        return RuntimeConfig::get($key, $default);
    }
}
