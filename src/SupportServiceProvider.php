<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 3/24/18
 * Time: 21:41
 */

namespace Larangular\Support;

use Illuminate\Support\ServiceProvider;

class SupportServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include_once __DIR__ . './helpers.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
