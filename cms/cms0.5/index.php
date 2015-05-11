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
//定义一个常量，防止恶意调用
define('IN_TG', true);
//调用公共配置文件
require 'includes/common.inc.php';
//设置一个常量，不同页面调取独立的样式文件
define('SCRIPT', 'index');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require ROOT_PATH.'includes/tittle.inc.php';
?>
<title>CMS多用户留言系统--首页</title>
</head>

<body>
<?php
require ROOT_PATH.'includes/header.inc.php';
?>
<div id="list">
	<h2>帖子列表</h2>
</div>
<div id="user">
	<h2>新进会员</h2>
</div>
<div id="pics">
	<h2>最新图片</h2>
</div>
<?php
require ROOT_PATH.'includes/footer.inc.php';
?>
</body>
</html>
