<?php
/**
 * Created by PhpStorm.
 * User: duyonghai
 * Date: 2016/4/18
 * Time: 16:01
 */

namespace sea;

class pdo{

    private static $db_config = '';
    private static $instance = '';
    private static $conncet = '';
    private static $lastInsertId = '';

    public function __construct(){
        if(empty(self::$instance)){
            self::connect();
        }
    }

    public static function getConfig(){

    }

    public static function connect(){
        $dsn = 'mysql:host=localhost;dbname=fs';
        $pdo = new \PDO($dsn, 'root', '');
        $pdo->exec('set names utf8');
        self::$conncet = $pdo;
    }

    public static function query($sql){
        self::$connect ->setFetchMode(PDO::FETCH_ASSOC);
        $res = self::$connect ->query($sql);
        return $res;
    }

    public static function exec($sql){
        $res = self::$conncet ->exec($sql);
        $lastInsertId = '';
        return $res;
    }

}