<?php

namespace Larangular\Support\Path;

use Illuminate\Support\Facades\App;

class Path {

    public function fromAppRoot($path, $remove = null): string {
        $toSearch = [
            App::basePath(),
        ];
        if (!is_null($remove)) {
            array_push($toSearch, $remove);
        }

        return str_replace($toSearch, '', $path);

    }

}
