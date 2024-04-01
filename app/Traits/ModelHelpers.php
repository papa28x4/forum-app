<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait ModelHelpers {

    public function matches(self $model): bool
    {
        return $this->id === $model->id;
    }
}