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
{if $err ==1}
<p style="color:red;">验证失败，重新登录</P>
{/if}
</body>
</html>