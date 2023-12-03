<?php

namespace App\Models;
use Illuminate\Support\Collection;

class Hello
{
    public static function say_hello() : Collection{
        return collect(['foo' => 'bar']);
    }

}
