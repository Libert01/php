<?php
$arr = array(0755,888,6666);
$str = implode("-",$arr);

var_dump($str);

echo "<br><br>";

$arr = array('hello','welcome','to','china');
$str= implode(" ++ ",$arr);
var_dump($str);