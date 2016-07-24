<?php

namespace OldTimeGuitarGuy\Plaid\Laravel;

use OldTimeGuitarGuy\Plaid\Plaid;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Support\ServiceProvider;
use OldTimeGuitarGuy\Plaid\Http\Request as PlaidRequest;

class PlaidServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path('plaid.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Plaid::class, function($app) {
            // Create the request instance
            $request = new PlaidRequest(
                new GuzzleClient,
                $app['config']['plaid.client_id'],
                $app['config']['plaid.secret'],
                $app['config']['plaid.use_production']
            );

            // Return the Plaid instance
            return new Plaid($request);
        });
    }
}
