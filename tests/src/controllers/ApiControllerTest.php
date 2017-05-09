<?php

/**
 * @description
 * @author by Yaoyuan.
 * @version: 2017-05-05
 * @Time: 2017-05-05 17:45
 */
class ApiControllerTest extends PHPUnit_Framework_TestCase
{
    public function testindexAction() {
        $request = new Yaf_Request_Simple('GET','V1','Api','index');
        $res = Yaf_Application::app()->getDispatcher()->returnResponse(true)->dispatch($request);
        
        $this->assertEquals ( 'hello-world',$res->getBody());
    }
}
