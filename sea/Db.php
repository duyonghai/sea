<?php

namespace sea;

class Db{

    protected static $instances = [];
    protected static $instance = null;

    public static function connect($db='DB'){
        if( isset(self::$instances[$db]) ){
            self::$instance = self::$instances[$db];
        }else{
            $config = C($db);
            $conn = mysqli_connect( $config['db_host'], $config['db_user'], $config['db_passwd'], $config['db_name'] );
            self::$instance = self::$instances[$db] = $conn;
        }
    }

    public static function db($db='DB'){
        self::connect($db);
    }

    public static function query($sql){
        $res = mysqli_query(self::$instance, $sql);
        $row = mysqli_fetch_row($res);
        return $row;
    }

    public function exec($sql){
        return mysqli_query(self::$conn[self::$db], $sql);
    }

}