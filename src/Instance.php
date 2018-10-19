<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 3/18/18
 * Time: 08:25
 */

namespace Larangular\Support;

class Instance {

    public static function hasTrait($instance, $trait){
        return (in_array($trait, class_uses($instance)));
    }

    public static function hasInterface($instance, $interface) {
        return ($instance instanceof $interface);
    }

    public static function instanceOf($instance, $type) {
        return ($instance instanceof $type);
    }

}