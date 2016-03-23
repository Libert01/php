<meta charset="utf-8" >
<?php
$name = $pwd = "";

if(!empty($_POST["name"])){
    
    $name = $_POST["name"];
}
if(!empty($_POST["pwd"])){
    
    $pwd = $_POST["pwd"];
}

require_once '../libs/Smarty.class.php';
require_once '../model/messageModel.class.php';
require_once '../model//fenyePage.class.php';

$message = new messageModel();
$check = $message->checkuser($name, $pwd);

$smarty = new Smarty();
$smarty->template_dir = "../templates/";
$smarty->compile_dir = "../templates_c/";

if($check){
    //验证失败，返回登录页  错误号1
    $smarty->assign("err",1);
    $smarty->display("login.tpl");
    exit();
}
//验证成功后  设置session用户名  供其它页面调用
session_start();
$_SESSION['name'] = $name;

$page = new page();
//初始化分页对象 赋值pcount rcount navi arr
$message->fenyepage($page, $name); 

$smarty->assign("res",$page->arr);
$smarty->assign("navi",$page->navi);

$smarty->display("messageList.tpl");


    
    
    
