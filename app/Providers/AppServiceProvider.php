<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use SciTech\Admin\Models\Department;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if(\Schema::hasTable('departments'))
        {
            $departments= Department::all();

            \View::share('departments', $departments);
        }
    }
}
