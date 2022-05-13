<?php

namespace Stepanenko3\LaravelRuntimeConfig;

use Illuminate\Support\Collection;

class RuntimeConfig extends Collection
{
    public function putMany($items)
    {
        foreach($items as $key => $value) {
            $this->put($key, $value);
        }
    }
}
