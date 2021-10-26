<?php

namespace Qcth\Wdt\Provider;


use Illuminate\Support\ServiceProvider as LaravelServiceProvider;


/**
 * 旺店通
 * Class ServiceProvider
 * @package Qcth\Wdp
 */
class ServiceProvider extends LaravelServiceProvider
{
	 //服务提供者延迟加载
    protected $defer=true;


    public function register()
    {

        /*$this->app->singleton('Wdp',function ($app){
            return new Index($app);
        });*/


    }

    public function boot()
    {

    }

    public  function  provides()
    {
        return ['Wdt'];
    }

}
