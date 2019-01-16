<?php

namespace Larangular\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Instance extends Facade {
    protected static function getFacadeAccessor() {
        return 'Instance';
    }
}
