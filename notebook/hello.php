<?php
require_once './libs/Smarty.class.php';

$smarty = new Smarty();

$smarty->assign("str","hello world");
$smarty->assign("int",22);
$smarty->assign("flo",2.132);
$smarty->assign("boo",true);

$arr = [0,1,5,"a"];
$smarty->assign("arr",$arr);

$arr1 = ["aaa"=>0,"bbb"=>1,"ccc"=>5,"ddd"=>"a"];
$smarty->assign("arr1",$arr1);

$arr2 = ["a"=>["aaa"=>0,"bbb"=>1,"ccc"=>5,"ddd"=>"a"],
   "b"=> ["eee"=>44,"fff"=>878,"hhh"=>54345,"yyy"=>"acc"]];
$smarty->assign("arr2",$arr2);

class cat{
    var $name,$age,$color,$arr;
    
    function __construct($n,$a,$c,$ar){
        $this->name = $n;
        $this->age = $a;
        $this->color = $c;
        $this->arr = $ar;
    }
}
$cat = new cat("xiaohua","20","red",$arr2);

$smarty->assign("obj",$cat);

function test($args){
    $str = "";
    for($i=0;$i<$args['times'];$i++){
        $str .=$args['con'];
    }
    
    return $str;
}
$smarty->register("function","tt","test");


$smarty->display("hello.tpl");