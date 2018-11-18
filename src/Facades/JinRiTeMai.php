<?php

namespace Luozhenyu\LaravelJinRiTeMai\Facades;


use Illuminate\Support\Facades\Facade;

/**
 * Class JinRiTeMai
 * @package Luozhenyu\LaravelJinRiTeMai\Facades
 */
class JinRiTeMai extends Facade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'jinritemai';
    }

    /**
     * @return \Luozhenyu\JinRiTeMai\Application
     */
    public static function client()
    {
        return static::getFacadeRoot();
    }
}
