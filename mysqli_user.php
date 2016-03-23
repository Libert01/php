<meta charset=utf-8>
<?php
$mysqli = new mysqli("localhost", "root", "/123", "world");

if ($mysqli->connect_error) {
    die("connect failed" . $mysqli->connect_error);
}

$sql = "select * from user";

$res = $mysqli->query($sql);

while(($row = $res->fetch_row()) !=false){
    foreach($row as $k=>$v){
        echo "--$v";
    }
    echo "<br><br>";
}

$res ->free();
$mysqli ->close();