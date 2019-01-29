<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 3/18/18
 * Time: 08:25
 */

namespace Larangular\Support;

use Larangular\Support\Facades\Instance as CompliesFacade;

class Instance {

    public static function hasTrait($instance, $trait){
        return CompliesFacade::hasTrait($instance, $trait);
    }

    public static function hasInterface($instance, $interface) {
        return CompliesFacade::hasInterface($instance, $interface);
    }

    public static function instanceOf($instance, $type) {
        return CompliesFacade::instanceOf($instance, $type);
    }

}
