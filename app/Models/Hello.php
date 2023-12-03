<?php

namespace App\Models;
use Illuminate\Support\Collection;

class Hello
{
    public static function say_hello(string $name = 'world') : Collection{
        return collect(['Hello' => $name]);
    }

}
