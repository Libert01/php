<?php /* Smarty version 3.1.27, created on 2016-03-22 19:39:54
         compiled from "D:\myenv\apache\htdocs\zend\notebook\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1987056f12f0a9b41e5_83757193%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30e969c1ee798ef89a1660507b9fabf408b3262f' => 
    array (
      0 => 'D:\\myenv\\apache\\htdocs\\zend\\notebook\\templates\\login.tpl',
      1 => 1458640251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1987056f12f0a9b41e5_83757193',
  'variables' => 
  array (
    'err' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f12f0aa06289_40676512',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f12f0aa06289_40676512')) {
function content_56f12f0aa06289_40676512 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1987056f12f0a9b41e5_83757193';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登录页面</title>
</head>
<body>
<form action="../controller/loginController.php" method="post" >
<table>
	<tr>
		<td colspan =2><h2>内部留言本</h2></td>
	</tr>
	<tr>
		<td>用户名</td>
		<td><input type="text" name="name" ></td>
	</tr>
	<tr>
		<td>密  码</td>
		<td><input type="password" name="pwd" ></td>
	</tr>
	<tr>
		<td><input type="submit" value="登录"  ></td>
		<td><input type="reset" value="重写" ></td>
	</tr>
</table>
</form>
<?php if ($_smarty_tpl->tpl_vars['err']->value == 1) {?>
<p style="color:red;">验证失败，重新登录</P>
<?php }?>
</body>
</html><?php }
}
?>