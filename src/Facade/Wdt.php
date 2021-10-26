<?php

namespace Qcth\Wdt\Facade;

use Illuminate\Support\Facades\Facade ;

class Wdt extends  Facade
{
    protected static  function  getFacadeAccessor()
    {
        return 'Wdt';
    }
}
