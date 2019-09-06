<?php

namespace DenizTezcan\LaravelGoogleShopping;

use Spatie\ArrayToXml\ArrayToXml;

class LaravelGoogleShopping{

	public static $container = null;

	public static function container()
    {
        if (is_null(static::$container)) {
            static::$container = new Feed;
        }
        return static::$container;
    }

    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array(array(static::container(), $name), $arguments);
    }

}