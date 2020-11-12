<?php

namespace Larangular\Support\Traits;

use Watson\Validating\Injectors\UniqueWithInjector;
use Watson\Validating\ValidatingTrait as BaseValidatingTrait;

trait Validable {
    use UniqueWithInjector;
    use BaseValidatingTrait;

    public static function validating($callback) {
        static::registerModelEvent('validating', $callback);
    }

    public static function validated($callback) {
        static::registerModelEvent('validated', $callback);
    }

    public function mergeRules(array $rules) {
        $this->rules = array_merge($this->rules, $rules);

        return $this;
    }
}
