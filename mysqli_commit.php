<?php
//事务
$mysqli = new mysqli("localhost","root","/123","world");

if($mysqli->connect_error){
    die("connect failed".$mysqli->connect_error);
}

$mysqli->autocommit(false);

$sql_a = "update bank_a set balance=balance-1000 where id =1;";
$sql_b = "update bank_b set balance = balance +1000 where id =1;";

$res_a = $mysqli->query($sql_a);
$res_b = $mysqli->query($sql_b);

if(!$res_a || !$res_b){
    echo "failed, rollback!<br>".$mysqli->error;
    $mysqli->rollback();
} else {
    echo "shiwu success<br>";
    $mysqli->commit();
}

$mysqli->close();


?>
