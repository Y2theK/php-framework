<?php
namespace core;
class App{
    protected static $datas = [];
    public static function bind($key,$value)
    {
        static::$datas[$key] = $value;
        
    }
    // static::datas = self::datas
    public static function get($key)
    {
       
            return self::$datas[$key];
       
    }
}