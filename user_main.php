<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>主页</title>
</head>
<body>
<h1>登录成功</h1>
<?php 
if(!empty($_GET["name"])){
  $name =$_GET["name"];
  echo "<p>$name, 欢迎您！</p>";
}

?>
<ul>
    <li>
    	<a href="user_emp.php" >管理用户</a>
    </li>
    <li>
    	<a>添加用户</a>
    </li>
    <li>
    	<a>查询用户</a>
    </li>
    <li>
    	<a>安全退出</a>
    </li>
</ul>
</body>
</html>