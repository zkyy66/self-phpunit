<?php

/**
 * 缓存设置、获取、删除封装
*/
class Mc
{
    /**
     * 删除缓存
     * 删除单个：传精确的key即可
     * 删除多个：key类似：*activity::IndexPage*
     */
    public static function del($redisString, $mcKey)
    {
        // 删除首页推荐列表的缓存
        $listKeys = RedisClient::instance($redisString)->keys($mcKey);
        if (!empty($listKeys)) {
            $ret = RedisClient::instance($redisString)->del($listKeys);
        }
    }
    
    public static function get($redisString, $mcKey)
    {
        $listFromMc = RedisClient::instance($redisString)->get($mcKey);
        if (!empty($listFromMc)) {
            return unserialize($listFromMc);
        }
        return '';
    }
    
    /**
     * 设置缓存
     * @param unknown $redisString redis配置
     * @param unknown $mcKey 缓存key
     * @param unknown $value 缓存内容
     * @param number $expireTime 过期时间，秒
     */
    public static function set($redisString, $mcKey, $value, $expireTime = 0)
    {
        //设置缓存时效性
        if ($expireTime == 0) {
            return RedisClient::instance($redisString)->set($mcKey, serialize($value));
        } else if ($expireTime < 0) {
            return true;
        } else {
            return RedisClient::instance($redisString)->setex($mcKey, $expireTime, serialize($value));
        }
    }
}
?>