<?php

namespace Luozhenyu\LaravelJinRiTeMai;


use Illuminate\Support\Facades\Facade as LaravelFacade;

class Facade extends LaravelFacade
{
    /**
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'jinritemai';
    }
}
