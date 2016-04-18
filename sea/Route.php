<?php
/**
 * 路由文件
 */

namespace sea;

class Route
{

    public static function initOp(){
        $route_a = I('a', 'home');
        $route_m = I('m', 'index');
        $route_f = I('f', 'index');
        $file_url = ROOT . '/app/' . $route_a . '/' .$route_m . '.php';
        if ( is_file($file_url) ){
            require "$file_url";
            $init = new \app\home\Index;
            $route_f ? $init->I('f') : $init->index();
        }else{
            die( $route_m . '不存在');
        }
    }

}