<?php

namespace sea;

require 'Base.php';
require 'Function.php';
require 'Load.php';

//加载注册
\sea\Load::register();

//加载路由
\sea\Route::init();

//加载配置文件
\sea\config::init();

//加载数据库
\sea\Db::connect();
//\sea\Db::connect();
//
\sea\Db::db('DB_GOOD');

$sql = 'SELECT * FROM user';

$res = \sea\Db::query($sql);
print_r($res);

\sea\Db::db('DB');

$res = \sea\Db::query($sql);
print_r($res);

