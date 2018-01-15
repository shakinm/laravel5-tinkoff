<?php
/**
 * Created by PhpStorm.
 * User: m.shakin@digitalwand.ru
 * Date: 21.12.17
 * Time: 13:13
 */

namespace Shakinm\Tinkoff;


use Illuminate\Support\ServiceProvider;

/**
 * Class TinkoffServiceProvider
 * @package Shakinm\Tinkoff
 */
class TinkoffServiceProvider extends ServiceProvider
{
    /**
     * @var bool
     */
    protected $defer = true;


    /**
     * boot
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/tinkoff.php' => config_path('tinkoff.php'),
        ], 'tinkoff');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/tinkoff.php', 'tinkoff');

        $this->app->singleton('tinkoff', function ($app) {

            $config = $app->make('config');
            $terminalKey = $config->get('tinkoff.terminalKey');
            $secretKey = $config->get('tinkoff.secretKey');
            $api_url = $config->get('tinkoff.api_url');

            return new TinkoffService($terminalKey, $secretKey, $api_url);
        });
    }

    public function provides()
    {
        return ['tinkoff'];
    }

}