<?php
/**
 * 公共函数库
 */

function I($str, $def){
    $res = @$_REQUEST[$str];
    if($res == ''){
        $res = $def;
    }
    return $res;
}

function M($model){
    return \sea\Model::init($model);
}

function C($key){
    \sea\Config::init();
    return \sea\Config::get($key);
}

