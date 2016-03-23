<?php
require_once '../libs/Smarty.class.php';
require_once '../model/messageModel.class.php';
require_once '../model//fenyePage.class.php';

$page = new page();

if(isset($_GET['pnow'])){
    $page->pnow = $_GET['pnow'];
}

$message = new messageModel();

session_start();
$user = $_SESSION['name'];
$message->fenyepage($page, $user);

$smarty = new Smarty();
$smarty->template_dir = "../templates/";
$smarty->compile_dir = "../templates_c/";

$smarty->assign('res',$page->arr);
$smarty->assign('navi',$page->navi);

$smarty->display("messageList.tpl");

