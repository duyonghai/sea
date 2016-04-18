<?php

namespace app\home;

class index{

    public static function index(){
        $model_user = M('User');
        $a = $model_user->getInfo();

        $sql = 'select * from fs_goods limit 3';
        $db = new \sea\DataBase();
        $res = $db->getSelect($sql);

        var_dump($res);

    }

}