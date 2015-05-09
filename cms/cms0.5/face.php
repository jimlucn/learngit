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
define('SCRIPT', 'face');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require ROOT_PATH.'includes/tittle.inc.php';
;
?>
<title>CMS多用户留言系统--头像</title>
</head>

<body>
<div id="face">
   <h3>更换头像</h3>
	<dl>
		<dt></dt>
		<?php for($i=1;$i<10;$i++) {?>
		<dd><img src="images/face/m0<?php echo $i?>.gif" alt="头像<?php echo $i?>"></dd>
		<?php }?>
		<?php foreach(range(10,64) as $i) {?>
		<dd><img src="images/face/m<?php echo $i?>.gif" alt="头像<?php echo $i?>"></dd>
		<?php }?>

	</dl>
</div>
</body>
</html>