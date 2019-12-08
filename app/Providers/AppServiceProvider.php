<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Ibadf\Domain\Repository\NewsRepositoryInterface;
use Ibadf\Persistence\Eloquent\Repository\NewsRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsRepositoryInterface::class,
            function($app){
                return new NewsRepository($app['db']);
            }
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
