<?php
/**
 * TestGuest Version1.0
 * ================================================
 * Copy 2015-2015 jimlu
 * Web: http://www.jsnin.com
 * ================================================
 * Author: jimlu
 * Date: ${date}
*/
//定义硬路径常量
define('ROOT_PATH',substr(dirname(__FILE__),0,-8));
//引入核心函数库
require ROOT_PATH.'includes/global.func.php';
//判断PHP版本是否过低
if(PHP_VERSION<'4.1.0'){
	exit("THE PHP VERSION IS TOO LOW!");
}
//执行耗时
$_start_time=_runtime();
?>