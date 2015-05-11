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
if(!defined('IN_TG')){
	exit("access defined!");
}
$_end_time=_runtime();
?>
<div id="footer">
<p>本网站执行耗时：<?php echo round(($_end_time-$_start_time),4)?>秒</p>
	<p>版权所有 盗版必究</p>
	<p>本程序由<span>jimlu</span>提供 源码可以任意修改或发布（c）jsnin.com</p>
</div>