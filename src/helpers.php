<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 3/18/18
 * Time: 08:24
 */


use Symfony\Component\VarDumper\VarDumper;

if (! function_exists('d')) {
    function d($var, ...$moreVars)
    {
        VarDumper::dump($var);

        foreach ($moreVars as $v) {
            VarDumper::dump($v);
        }
    }
}

if (! function_exists('instance_has_trait')) {
    function instance_has_trait($instance, $trait)
    {
        return \Larangular\Support\Instance::hasTrait($instance, $trait);
    }
}

if (! function_exists('instance_has_interface')) {
    function instance_has_interface($instance, $trait)
    {
        return \Larangular\Support\Instance::hasInterface($instance, $trait);
    }
}

