<?php

namespace Larangular\Support\Instance;

class Complies {
    public function hasTrait($instance, $trait): bool {
        return in_array($trait, class_uses($instance), true);
    }

    public function hasInterface($instance, $interface): bool {
        return ($instance instanceof $interface);
    }

    public function instanceOf($instance, $type): bool {
        return ($instance instanceof $type);
    }
}
