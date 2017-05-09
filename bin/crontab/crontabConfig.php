<?php
/**
 * 定时运行程序的主程序配置文件
 * @author lifuqiang
 */
$crontabConfig = array(
	'now'	=> array(//实时运行程序
// 		'nowTest' => array(
// 			'ip' => '172.28.50.174',
// 			'limit' => 1, //每分钟运行一次
// 			'beginTm' => strtotime('2016-01-01 00:00:00'),
// 			'endTm' => strtotime('2020-01-01 23:59:59'),
// 			'requestUri' => '/crontab/test/now',
// 		),
	   	
	    
	),
	'day' => array(
// 		'dayTest' => array(
// 			'ip' => '172.28.50.174',
// 			'beginTm' => strtotime('2016-01-01 00:00:00'),
// 			'endTm' => strtotime('2020-12-31 23:59:59'),
// 			'time' => array('03:00:00', '05:00:00'),
// 			'requestUri' => '/crontab/test/day',	
// 		),
	    'talentProduce' => array(
	        'ip' => '172.28.50.174',
	        'beginTm' => strtotime('2016-01-01 00:00:00'),
	        'endTm' => strtotime('2020-12-31 23:59:59'),
	        'time' => array('03:00:00'),
	        'requestUri' => '/crontab/talent/produce',
	    ),
	       
	    
	),
	'week' => array(
// 		'weekTest' => array(
// 			'ip' => '172.28.50.174',
// 			'limit' => '4', //星期几
// 			'beginTm' => strtotime('2016-01-01 00:00:00'),
// 			'endTm' => strtotime('2020-12-31 23:59:59'),
// 			'time' => array('03:00:00'),
// 			'requestUri' => '/crontab/test/week',	
// 		),		
	),
    
);