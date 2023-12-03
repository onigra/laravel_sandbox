<?php

namespace App\Models;
use Illuminate\Support\Collection;

class Hello
{
    public static function say_hello(string $name) : Collection{
        return collect(['Hello' => $name]);
    }

}
