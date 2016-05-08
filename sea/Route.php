<?php
/**
 * 路由文件
 */

namespace sea;

class Route
{

    public static function init(){
        $route_m = I('m', 'home');
        $route_c = I('c', 'index');
        $route_a = I('a', 'index');
        $file_path = ROOT_PATH . '/app/' . $route_m . '/' .$route_c . '.php';
        if ( is_file($file_path) ){
            $class = '\\' . 'app' . '\\' . $route_m . '\\' . $route_c ;
            $init = new $class();
            $init->index();
        }else{
            die( $route_m . '不存在');
        }
    }

}