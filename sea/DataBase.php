<?php

namespace sea;

class DataBase{

    public $db_host = '127.0.0.1';
    public $db_user = 'root';
    public $db_passwd = '';
    public $db_database = 'fs';
    public $db_port = '';

    public $conn = '';

    public function __construct()
    {
        $this->conn();
    }

    public function conn(){
        if ( $this->conn){
            return $this->conn;
        }else{
            $conn = mysqli_connect( $this->db_host, $this->db_user, $this->db_passwd, $this->db_database );
            $this->conn = $conn;
            return $this->conn;
        }
    }

    public function getSelect($sql){
//        $sql = 'select * from fs_goods limit 3';
        return mysqli_query($this->conn, $sql);
    }

}