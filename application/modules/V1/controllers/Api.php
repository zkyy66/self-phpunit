<?php

/**
 * @description
 * @author by Yaoyuan.
 * @version: 2017-05-05
 * @Time: 2017-05-05 17:44
 */
class ApiController extends Controller
{
    public function indexAction() {
        $this->getResponse()->setBody('hello-world');
    }
}