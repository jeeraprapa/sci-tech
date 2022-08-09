<?php

namespace SciTech\Admin\Providers;

use Illuminate\Pagination\Paginator;
use SciTech\Admin\Console\Commands\CreateRoutePermissions;
use SciTech\Admin\Http\Middleware\PermissionMiddleware;
use SciTech\Admin\Tree;
use Illuminate\Routing\Router;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(Router $router)
    {
        Gate::before(function ($user, $ability) {
            return $user->hasRole('Super Admin') ? true : null;
        });

        $this->loadRoutesFrom(__DIR__ . '/../Routes/web.php');

        $router->aliasMiddleware('permission', PermissionMiddleware::class);

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'admin');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'admin');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');

        $this->composeView();

        include __DIR__ . '/../macro.php';

        Paginator::defaultView('pagination::bootstrap-4');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();

        $this->registerCommands();
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/menu.php',
            'menu.admin'
        );
    }

    /**
     * Bind the data to the views.
     *
     * @return void
     */
    protected function composeView()
    {
        view()->composer(['admin::layouts.nav-left'], function ($view) {
            $tree = Tree::create();

            $admin = Auth::guard('admin')->user();
            $permissionType = $admin->roles->first()->name;
            $allowedPermissions = $admin->roles->first()->permissions->pluck('name')->toArray();

            foreach (config('menu.admin') as $index => $item) {
                $route = Arr::get($item, 'route');
                if ($permissionType == 'Super Admin' || in_array($route, $allowedPermissions)) {
                    $tree->add($item, 'menu');
                }
            }

            $view->with('menu', $tree);
        });
    }

    /**
     * Register the console commands of this package
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([CreateRoutePermissions::class]);
        }
    }
}
