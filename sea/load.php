<?php
/**
 * 自动加载
 * Created by PhpStorm.
 * User: duyonghai
 * Date: 2016/4/18
 * Time: 11:23
 */

class load{

    private static $instance = [];
    private static $nameSpaceName = '';
    private static $nameSpacePath = '';

    public static function autoload($class){
        self::$nameSpaceName = basename($class);
        self::$nameSpacePath = dirname($class);
        $file = ROOT_PATH . self::$nameSpacePath . self::$nameSpaceName . EXT;

//        if(strstr($class)){
//            $file = str_replace($class, '\\', DS);
//            include_once($file);
//            return true;
//        }elseif(is_file( APP_PATH . 'common' . DS . 'model' .DS . $class . '.php' )){
//            $file = APP_PATH . 'common' . DS . 'model' .DS . $class . '.php';
//            include $file;
//            return true;
//        }

    }

    public static function register($autoload = ''){
        spl_autoload_register($autoload ? $autoload : self::autoload());
    }

}