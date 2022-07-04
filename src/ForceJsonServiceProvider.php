<?php

namespace Abdukhaligov\LaravelForceJson;

use Illuminate\Support\ServiceProvider;

class ForceJsonServiceProvider extends ServiceProvider
{

  /**
   * Bootstrap any package services.
   *
   * @return void
   */
  public function boot()
  {
    /** @var Router $router */
    $router = $this->app['router'];

    $router->aliasMiddleware('json', ForceJsonMiddleware::class);
  }

  /**
   * Register any package services.
   *
   * @return void
   */
  public function register()
  {
    //
  }
}
