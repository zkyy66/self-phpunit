<?php
/**
 * 默认Controller
 * @description Yaf 入口文件
 * @author zhaowei
 * @version 2016-05-24
 */


class IndexController extends Controller {
    /**
     * 首页
     */
    public function indexAction(){
        //接受不到
        //$getParam = $this->request->getQuery('id','');
        
        $id = $this->getRequest()->getParam('id','');
        
        $name = $this->getRequest()->getParam('name','');

        
    
        $tmpArray = [
            'id' => $id,
            'name' => $name
        ];

//        try {
//            PHPUnit\Framework\TestCase::assertInternalType('int',$id,'参数类型不对');
//            PHPUnit\Framework\TestCase::assertInternalType('string',$name,'参数类型不对');
//        } catch (Exception $e) {
//            echo $e->getMessage();
//        }
//        $this->getRequest()->setParam($tmpArray);
        $this->getResponse()->setBody(json_encode($tmpArray));
    }
    
}