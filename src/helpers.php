<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 3/18/18
 * Time: 08:24
 */


use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('d')) {
    function d($var, ...$moreVars) {
        VarDumper::dump($var);

        foreach ($moreVars as $v) {
            VarDumper::dump($v);
        }
    }
}

if (!function_exists('instance_has_trait')) {
    function instance_has_trait($instance, $trait) {
        return \Larangular\Support\Instance::hasTrait($instance, $trait);
    }
}

if (!function_exists('instance_has_interface')) {
    function instance_has_interface($instance, $trait) {
        return \Larangular\Support\Instance::hasInterface($instance, $trait);
    }
}

if (!function_exists('str_to_float')) {
    function str_to_float(string $value): float {
        $cleanString = preg_replace('/([^0-9\.,])/i', '', $value);
        $onlyNumbersString = preg_replace('/([^0-9])/i', '', $value);

        $separatorsCountToBeErased = strlen($cleanString) - strlen($onlyNumbersString) - 1;

        $stringWithCommaOrDot = preg_replace('/([,\.])/', '', $cleanString, $separatorsCountToBeErased);
        $removedThousendSeparator = preg_replace('/(\.|,)(?=[0-9]{3,}$)/', '', $stringWithCommaOrDot);

        return (float)str_replace(',', '.', $removedThousendSeparator);
    }
}
