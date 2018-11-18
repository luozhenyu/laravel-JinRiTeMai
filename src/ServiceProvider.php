<?php


namespace Luozhenyu\LaravelJinRiTeMai;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;
use Luozhenyu\JinRiTeMai\Application as JinRiTeMaiApplication;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = true;

    /**
     * Boot the provider.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config/config.php' => config_path('jinritemai.php'),
        ]);
    }

    /**
     * Register the provider.
     */
    public function register()
    {
        $app=$this->app;
        $app->singleton('jinritemai', function ($app) {
            $config = $app['config']->get('jinritemai');
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
