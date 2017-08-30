<?php

namespace Seymur\Clockworksms\Facades;

Use Illuminate\Support\Facades\Facade;

class Clockworksms extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'seymur-clockworksms';
    }


}