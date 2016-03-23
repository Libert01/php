<?php
    require_once '../libs/Smarty.class.php';
    
    $smarty = new Smarty();
    $smarty->template_dir = "../templates/";
    $smarty->compile_dir = "../templates_c/";
    
    $err = "";
    if(!empty($_GET['err'])){
        
        $err = $_GET['err'];
    }
    $smarty->assign("err",$err);
    
    $smarty->display("login.tpl");
    