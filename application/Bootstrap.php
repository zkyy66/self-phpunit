<?php

/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Yaf_Bootstrap_Abstract{
    
    /**
     * 注册项目配置信息
     */
    public function _initConfig() {
        //配置保存
        $arrConfig = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config', $arrConfig);
    }
    

    /**
     * 注册应用配置信息
     */
    public function _initAppCofig() {
        $appConfig = new Yaf_Config_Ini(APP_PATH . '/application/conf/app.ini', APP_ENV);
        Yaf_Registry::set('appConfig', $appConfig);
    }
    
    /**
     * 关闭view 渲染
     * @param Yaf_Dispatcher $dispatch
     */
    public function _initView(Yaf_Dispatcher $dispatch) {
//         $dispatch->disableView();
    }
    
    /**
     * 保存数据库配置
     */
//    public function _initDb() {
//        $dbConfig = Yaf_Application::app()->getConfig()->get('database')->toArray();
//        Yaf_Registry::set('dbConfig', $dbConfig);
//    }
    
}