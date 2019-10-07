<?php

namespace Grananda\AwsFaceMatch\Facades;

use Illuminate\Support\Facades\Facade;

class FaceMatch extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'FaceMatch';
    }
}
