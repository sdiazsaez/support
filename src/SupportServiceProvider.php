<?php

namespace Larangular\Support;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use Larangular\Support\Instance\Complies;
use Larangular\Support\Path\Path;

class SupportServiceProvider extends ServiceProvider implements DeferrableProvider {

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
        include_once __DIR__ . '/helpers.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        $this->app->singleton('Instance', static function () {
            return new Complies();
        });

        $this->app->singleton(Path::class, static function () {
            return new Path;
        });

    }

    public function provides(): array {
        return [
            'Instance',
            Path::class
        ];
    }
}
