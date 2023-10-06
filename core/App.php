<?php
namespace core;//use namespace for same class "App" 
class App
{
    protected static $datas = [];
    public static function bind($key, $value)
    {
        static::$datas[$key]=$value;
    }

    public static function get($key)
    {
        return static::$datas[$key];
    }
}