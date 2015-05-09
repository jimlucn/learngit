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
define('SCRIPT', 'reg');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
require ROOT_PATH.'includes/tittle.inc.php';
?>
<title>CMS多用户留言系统--注册</title>
</head>

<body>
<?php
require ROOT_PATH.'includes/header.inc.php';
?>
<div id="register">
<h3>会员注册</h3>
<form method="post" action="post.php">
     <dl>
     	<dt>请认真填写以下信息</dt>
     	<dd>用 户 名：<input type="text" name="username" class="text">(*必填，至少两位)</dd>
     	<dd>密　　码：<input type="password" name="password" class="text">(*必填，至少六位)</dd>
     	<dd>确认密码：<input type="password" name="conpassword" class="text">(*必填，至少六位)</dd>
     	<dd>密码提示：<input type="text" name="tpass" class="text">(*必填，至少两位)</dd>
     	<dd>密码回答：<input type="text" name="dpass" class="text">(*必填，至少两位)</dd>
     	<dd>性　　别：<input type="radio" name="female" class="radio" value="female" checked="checked">女<input type="radio" name="male" class="radio" value="male">男</dd>
     	<dd>头像选择：<img src="images/face/m01.gif" class="img" onclick="javascript:window.open('face.php','face','width=400,height=400,top=0,left=0')"></dd>
     	<dd>电子邮件：<input type="text" name="username" class="text"></dd>
     	<dd>Q　　　Q：<input type="text" name="qq" class="text"></dd>
     	<dd>主页地址：<input type="text" name="url" class="text" value="http://"></dd>
     	<dd>验 证 码：<input type="text" name="code" class="text yzm"></dd>
     	<dd><input type="submit" name="submit" class="submit" value="注册"></dd>
     </dl>
</form>
</div>
<?php
require ROOT_PATH.'includes/footer.inc.php';
?>
</body>
</html>