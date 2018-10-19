<?php

namespace Larangular\Support\Routing;

abstract class RouteRegistrar {

    public static function register() {
        (new static)->map();
    }

    abstract public function map();

    public function __call($name, $arguments) {
        return app('router')->$name(...$arguments);
    }
}
