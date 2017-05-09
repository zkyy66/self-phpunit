<?php

/**
 * @description
 * @author by Yaoyuan.
 * @version: 2017-05-05
 * @Time: 2017-05-05 15:38
 */
class ActivityController extends Controller
{
    public function addAction () {
        $this->getResponse()->setBody('hello-world');
    }
}