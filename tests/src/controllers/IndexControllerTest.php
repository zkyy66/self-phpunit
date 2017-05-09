<?php

/**
 * @description
 * @author by Yaoyuan.
 * @version: 2017-05-05
 * @Time: 2017-05-05 16:49
 */
class IndexControllerTest extends PHPUnit_Framework_TestCase
{
    
    public function testindex()
    {
        $param = array("id" => 345, "name" => 'test');
        $request = new Yaf_Request_Simple("CLI", "", "Index", "index", $param);
        
        $res = Yaf_Application::app()->getDispatcher()->returnResponse(true)->dispatch($request);
//        Yaf_Application::app()->getDispatcher()->returnResponse(true)->dispatch($request);
        $value = json_decode($res->getBody(),true);
        
        $valid = ['id' => 345,'name' => 'test3'];

//        $res = Yaf_Application::app()->getDispatcher()->getRequest()->getParams();
//
//        $value = json_encode($res);


//        不相等时报告错误，错误讯息由 $message 指定。
        $this->assertEquals($valid, $value, '判断值不符合');
        //接受相同的参数。
        //$this->assertNotEquals ( $valid,$value,'判断值不符合');
    }


//    public function testProducerFirst()
//    {
//        $this->assertTrue(true);
//        return 'first';
//    }
//
//    public function testProducerSecond()
//    {
//        $this->assertTrue(true);
//        return 'second';
//    }
//
//    /**
//     * @depends testProducerFirst
//     * @depends testProducerSecond
//     */
//    public function testConsumer()
//    {
//        var_dump(func_get_args());
//        var_dump(456);
//        $this->assertEquals(
//            ['first', 'second'],
//            func_get_args()
//        );
//    }
}
