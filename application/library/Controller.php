<?php 
 /**
 * Controller 父类
 * @description 所有controller实现都需要继承该类
 * @author zhaowei
 * @version 2016-05-24
 */
class Controller extends Yaf_Controller_Abstract {
    
    //返回信息code值
    const OK               = '0';  //表示成功
    const ERR_PARAM        = '1';  //表示参数错误
    const ERR_SYS          = '2';  //表示系统服务器错误
    const ERR_IM           = '3';  //表示发送IM消息异常
    
    
    
    protected   $_cnf           = null;
    protected   $_dispatcher    = null;
    
    protected   $_debug         = FALSE;  // 是否开启调试
    
    public function init() {
       //初始化配置对象
       $this->_cnf          = Yaf_Registry::get('appConfig');
       //初始化Dispatcher对象
       $this->_dispatcher   = Yaf_Application::app()->getDispatcher();
       //关闭自动渲染
       $this->_dispatcher->disableView();  
	   //获取请求的request对象
	   $this->request  = $this->getRequest();

    }
        
    /**
     * 验证访问客户端票， 判断访问是否非法
     * @return boolean
     */
    protected function checkPortalTicket() {
        if (APP_ENV == 'develop') {
            return true;
        }
    
        $portalTicket = trim($this->getRequest()->getCookie('portalTicket'));
        if (! $portalTicket) {
             
            return false;
        }
    
        $ua         = Fn::getHttpUserAgent();
        $secrect    = $this->_cnf->get('site.info.ticketSecrect');
        if (md5($ua . $secrect) == substr($portalTicket, 8)) {
            return true;
        }
    
        return false;
    }
    
    /**
     * 产生客户端票, 用来判断访问是否非法
     */
    protected function setPortalTicket() {
        $ua         = Fn::getHttpUserAgent();
        $secrect    = $this->_cnf->get('site.info.ticketSecrect');
    
        $portalTicket = Fn::randString(8) . md5($ua . $secrect);
    
        setcookie('portalTicket', $portalTicket, time() + 3600, '/');
    }
}
