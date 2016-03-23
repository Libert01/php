<?php

require_once './myMiniSmarty.class.php';

$smarty = new mySmarty();

$smarty->assign("title","我的第一个文件tt");
$smarty->assign("content","我的第一个文件cc");

$smarty->display("intro.tpl");