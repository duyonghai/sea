<?php

namespace app\home;

class Index{

    public function index(){

        $model_user = M('User');
        $a = $model_user->getInfo();
//        print_r($a);

//        echo C('web_url');
//        echo C('web_url');
//        echo C('web_url');
//        echo C('web_url');


    }

}