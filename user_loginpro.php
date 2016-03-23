<?php
//接收数据
if(empty($_POST["id"])){
    header("location:user_login.php?err=1");
    exit();
}

if(empty($_POST["passwd"])){
    header("location:user_login.php?err=1");
    exit();
}

if(empty($_POST["checkcode"])){
    header("location:user_login.php?err=1");
    exit();
}

$id = $_POST["id"];

$passwd = $_POST["passwd"];

$checkcode = $_POST["checkcode"];


require_once  "user_userService.class.php";
$user = new userService();

$res=$user->checkUser($id, $passwd);

if($res){    
    //id 密码验证成功  重定向主页
    header("location:user_main.php?name=$res");
    exit();
} 

//用户登录错误
header("location:user_login.php?err=1");
exit();


?>

