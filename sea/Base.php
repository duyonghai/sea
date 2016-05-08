<?php
/**
 * 定义常量
 */

define('DS', DIRECTORY_SEPARATOR);

define('SEA_PATH', dirname(__FILE__) . DS );
define('ROOT_PATH', dirname(SEA_PATH) . DS );
define('APP_PATH', ROOT_PATH . 'app' . DS );
define('COMMON_PATH', APP_PATH . 'common' . DS);
define('MODEL_PATH', COMMON_PATH . 'model' . DS);
