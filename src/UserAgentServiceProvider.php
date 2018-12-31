<?php
namespace Nebed\UserAgent;
use Illuminate\Support\ServiceProvider;
class UserAgentServiceProvider extends ServiceProvider
{
    /**
     * 
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('useragent', function ($app) {
            return new UserAgent();
        });
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['useragent'];
    }
}