<?php

namespace Larangular\Support\Instance;

class Complies {
    public function hasTrait($instance, $trait){
        return (in_array($trait, class_uses($instance)));
    }

    public function hasInterface($instance, $interface) {
        return ($instance instanceof $interface);
    }

    public function instanceOf($instance, $type) {
        return ($instance instanceof $type);
    }
}
