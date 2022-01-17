<?php

class Config
{
    protected function __construct() { }

    public static function get(string $path)
    {
        $configs = require_once('../configs.php');

        $path = explode("/", $path);

        return $configs[$path[0]][$path[1]];
    }

}

echo Config::get('db2/login');