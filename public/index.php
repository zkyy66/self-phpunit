<?php
/**
 * 框架入口文件
 * @description Yaf 入口文件
 * @author zhaowei
 * @version 2016-05-24
 */
error_reporting(E_ALL);
define( "APP_PATH",  realpath( dirname(__FILE__) . '/../' ) );
define("UNIT_PATH",realpath( dirname(__FILE__) . '/../../' ) );
if (! defined('APP_ENV')) {
    $serverName = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';
    if (preg_match("/t200|p100|ya/i", $serverName)) {
        define('APP_ENV', 'develop');
    } else {
        define('APP_ENV', 'product');
    }
}

$app  = new Yaf_Application( APP_PATH . "/conf/application.ini", APP_ENV);
//$app->bootstrap()->getDispatcher()->dispatch(new Yaf_Request_Simple());

$app->bootstrap()->run();
