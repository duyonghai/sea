<?php
/**
 * Created by PhpStorm.
 * User: duyonghai
 * Date: 2016/4/18
 * Time: 11:07
 */
namespace sea;

class config{

    private static $config = '';

    public function __construct(){
        self::init();
    }

    public static function init(){
        if(self::$config){
            return self::$config;
        }
        if(empty(self::$config)){
            self::$config = require(APP_PATH . 'config.php');
        }
    }

    public static function set(){

    }

    public static function get($key){
        return self::$config[$key];
    }

}