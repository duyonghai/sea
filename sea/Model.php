<?php
/**
 * Created by PhpStorm.
 * User: duyonghai
 * Date: 2016/4/29
 * Time: 22:51
 */
namespace sea;

class Model{

    protected static $instance = null;

    public function __construct(){

    }

    public static function init($model){
        if( isset(self::$instance[$model]) ){
            return self::$instance[$model];
        }else{
            $modelname = '\\app\\common\\model\\'  . $model;
            self::$instance[$model] = new $modelname();
            return self::$instance[$model];
        }
    }

    public function add(){
        echo '%%%%';
    }

}