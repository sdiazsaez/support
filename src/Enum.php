<?php

namespace Larangular\Support;

abstract class Enum {

    public static function getConstantName($className, $constantValue) {
        $refl = new \ReflectionClass($className);
        $constants = $refl->getConstants();
        return array_search($constantValue, $constants);
    }


    public static function getConstant($className, $name) {
        $refl = new \ReflectionClass($className);
        $constants = $refl->getConstants();

        if(!array_key_exists($name, $constants)) {
            return false;
        }

        return $constants[$name];
    }

    public static function getConstants($className) {
        $refl = new \ReflectionClass($className);
        return $refl->getConstants();
    }

}
