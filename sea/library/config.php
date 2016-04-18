<?php
/**
 * Created by PhpStorm.
 * User: duyonghai
 * Date: 2016/4/18
 * Time: 11:07
 */
namespace sea\library;

class config{

    private static $config = '';

    public function __construct()
    {
        if(empty(self::$config)){
            self::$config = require( SEA_PATH . 'config.php' );
        }
    }

    public static function getConfig(){
        return self::$config;
    }

}