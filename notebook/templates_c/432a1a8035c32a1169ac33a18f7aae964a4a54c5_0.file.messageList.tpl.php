<?php /* Smarty version 3.1.27, created on 2016-03-22 19:47:39
         compiled from "D:\myenv\apache\htdocs\zend\notebook\templates\messageList.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2470356f130db1ea3e5_63445077%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '432a1a8035c32a1169ac33a18f7aae964a4a54c5' => 
    array (
      0 => 'D:\\myenv\\apache\\htdocs\\zend\\notebook\\templates\\messageList.tpl',
      1 => 1458647251,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2470356f130db1ea3e5_63445077',
  'variables' => 
  array (
    'res' => 0,
    'temp' => 0,
    'navi' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_56f130db228bf1_17355185',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56f130db228bf1_17355185')) {
function content_56f130db228bf1_17355185 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2470356f130db1ea3e5_63445077';
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>信息列表</title>
</head>
<body>
<h2>
	<a href="">发布信息</a>
	<a href="">退出系统</a>
</h2>

<table>
<tr>
	<th>id</th>
	<th>from</th>
	<th>to</th>
	<th>time</th>
	<th>message</th>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['res']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['temp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['temp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['temp']->value) {
$_smarty_tpl->tpl_vars['temp']->_loop = true;
$foreach_temp_Sav = $_smarty_tpl->tpl_vars['temp'];
?>
<tr>
  <td> <?php echo $_smarty_tpl->tpl_vars['temp']->value['id'];?>
</td>
  <td> <?php echo $_smarty_tpl->tpl_vars['temp']->value['sender'];?>
</td>
  <td> <?php echo $_smarty_tpl->tpl_vars['temp']->value['getter'];?>
</td>
  <td> <?php echo $_smarty_tpl->tpl_vars['temp']->value['sendtime'];?>
</td>
  <td> <?php echo $_smarty_tpl->tpl_vars['temp']->value['content'];?>
</td>
 
</tr>
<?php
$_smarty_tpl->tpl_vars['temp'] = $foreach_temp_Sav;
}
?>
</table>
<?php echo $_smarty_tpl->tpl_vars['navi']->value;?>


</body>
</html><?php }
}
?>