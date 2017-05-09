<?php

/**
 * @description
 * @author by Yaoyuan.
 * @version: 2017-05-05
 * @Time: 2017-05-05 17:32
 */
class ActivityControllerTest extends PHPUnit_Framework_TestCase
{
    public function testadd() {
        $request = new Yaf_Request_Simple('GET','','Activity','add');
        //getParam('yao')
        $res = Yaf_Application::app()->getDispatcher()->returnResponse(true)->dispatch($request);
        $this->assertEquals ( 'hello-world',$res,'判断值符合');//不相等时报告错误，错误讯息由 $message 指定。
    }
}
