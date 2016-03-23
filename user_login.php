<html>
<head>

<meta charset ="utf-8" />
<title>用户登录</title>
</head>

<body>
<h2>用户管理系统</h2>
<form action="user_loginpro.php" method="post">
<table>
	<tr>
    	<td>用户id</td>
    	<td><input type="text" name="id" /></td>
	</tr>
	<tr>
    	<td>密 &nbsp;&nbsp;码</td>
    	<td><input type="password" name="passwd" /></td>
	</tr>
	<tr>
    	<td>验证码</td>
    	<td><input type="text" name="checkcode" /></td>
	</tr>
	<tr>
    	<td><input type="submit" value="登录" /></td>
    	<td></td>
	</tr>
</table>
</form>
<?php 
    //接收登录返回信息
    if(!empty($_GET["err"])){
        
        $err = $_GET["err"];
        if($err==1){
            echo "<font color='red'>用户或密码错误</font>";
        }
    }
    
?>
</body>
</html>
