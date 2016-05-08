<?php
/**
 * 自动加载
 * Created by PhpStorm.
 * User: duyonghai
 * Date: 2016/4/18
 * Time: 11:23
 */
namespace sea;

class Load{

    private static $instance = [];
    private static $nameSpaceName = '';
    private static $nameSpacePath = '';

    public static function autoload($class){
        $file = ROOT_PATH  . $class . '.php';
        require $file;
    }

    public static function register($autoload = ''){
        spl_autoload_register('self::autoload');
    }

    public static function test(){
        echo 'test';
    }

}