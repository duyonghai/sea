<?php

function I($str, $def){
    $res = @$_REQUEST[$str];
    if($res == ''){
        $res = $def;
    }
    return $res;
}

function M($class){
    $file_url = ROOT . '/app/model/' . $class . '.php';
    if( is_file( $file_url ) ){
        require "$file_url";
        $new_class = '\app\model\\' . $class;
        $init = new $new_class;
        return $init;
    }
}

function C($name){
    $config = \sea\library\config::getConfig();
    return $config[$name];
}