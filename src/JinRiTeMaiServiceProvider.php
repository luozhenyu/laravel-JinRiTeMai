<?php


namespace Luozhenyu\LaravelJinRiTeMai;

use Illuminate\Support\ServiceProvider;
use Luozhenyu\JinRiTeMai\Application as JinRiTeMaiApplication;

/**
 * Class JinRiTeMaiServiceProvider
 * @package Luozhenyu\LaravelJinRiTeMai
 */
class JinRiTeMaiServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot the provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('jinritemai.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/config.php', 'jinritemai'
        );

        $this->app->singleton('jinritemai', function ($app) {
            $config = $app['config']->get('jinritemai', []);
            return new JinRiTeMaiApplication($config['appKey'], $config['appSecret'], $config['userConfig']);
        });
    }

    /**
     * @return array
     */
    public function provides()
    {
        return ['jinritemai'];
    }
}
