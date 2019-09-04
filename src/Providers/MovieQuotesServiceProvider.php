<?php

namespace Merqueo\MovieQuotes\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
use Merqueo\MovieQuotes\Repositories\Interfaces\MovieQuoteInterface;
use Merqueo\MovieQuotes\Repositories\MovieQuoteRepository;

class MovieQuotesServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'Merqueo\MovieQuotes';

    private $repositories = [
        MovieQuoteInterface::class => MovieQuoteRepository::class,
    ];

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../Views', 'moviequotes');
        parent::boot();
    }

    /**
     * register services.
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $repository) {
            $this->app->bind($interface, $repository);
        }
    }

    /**
     * Define the routes for the application.
     */
    public function map()
    {
        $this->movieRoutes();
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     */
    protected function movieRoutes()
    {
        Route::prefix('moviequotes/')
             ->namespace($this->namespace)
             ->group(__DIR__.'/../Routes/routes.php');
    }
}
