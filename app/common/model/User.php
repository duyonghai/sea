<?php

namespace app\common\model;
use sea\Model;

class User extends Model{

    function getInfo(){
        return ['name'=>'aaa','age'=>'18'];
    }

}