<?php
/**
 * 公用错误码
 */
class ResponseCode {
    
    // 正确返回
    const OK = 0;
    // 非法访问
    const EXP_UNAUTHORIZED_ACCESS= 1001; 
    // 参数有误
    const EXP_PARAM = 1002; 
    // 用户不匹配（当操作了不属于自己的记录时）
    const EXP_USER_MATCH_FAILED = 1003; 
    // 字数超出限制
    const EXP_TOO_MANAY_WORDS = 1004; 
    // 参数数据格式错误
    const EXP_DATA_FORMAT = 1005; 
    // 没有操作或访问权限
    const EXP_ILLEGAL_PERMISSION = 1006; 
    // 邮箱格式不正确
    const EXP_ILLEGAL_EMAIL_FORMAT = 1007; 
    // 未知错误,数据错误或者其他类似代码错误等
    const EXP_UNKNOWN = 1008; 
    // 失败,操作失败
    const EXP_FAILED = 1009; 
    // 验证用户失败,无权访问
    const EXP_FORBIDDEN = 1010; 
    // 参数错误,前端没有进行正常校验引起的参数格式错误
    const EXP_PARAMS_INVALID = 1011; 
    // 记录不存在
    const EXP_NOT_FOUND = 1012; 
    // 不支持的操作
    const EXP_UNSUPPORTED = 1013; 
    // 未登录的,需要登录
    const EXP_NOT_LOGINED = 1014;
    
    
    const ERR_DB_SYS     = 2000;
    // 数据库连接失败
    const ERR_DB_CONNECT = 2001; 
    // 数据获取失败
    const ERR_DB_GET_FAILED = 2002; 
    // 数据更新失败
    const ERR_DB_UPDATE_FAILED = 2003; 
    // 数据保存失败
    const ERR_DB_SAVE_FAILED = 2004; 
    // 数据删除失败
    const ERR_DB_DELETE_FAILED = 2005; 
    // Redis连接失败
    const ERR_REDIS_CONNECT = 2006; 
    // Redis返回False
    const ERR_REDIS_FALSE = 2007; 
    // Kafka连接失败
    const ERR_KAFKA_CONTENT = 2008;
    // Zookeeper连接失败
    const ERR_ZOOKEEPER = 2009; 
    // MongoDB连接失败
    const ERR_MONGODB_CONTENT = 2010; 
    
}