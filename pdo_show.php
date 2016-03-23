<meta charset=utf-8>

<?php

function showTab($tab)
{
    $mysql = new PDO("mysql:localhost", "root", "/123");
    
    $mysql->query("use world");
    
    $mysql->query("set names utf8");
    
    $res = $mysql->query("select * from $tab");
    
    foreach ($res as $row) {
        
        echo "$row[0]--$row[1]--$row[2]--$row[3]<br><br>";
    }
}

showTab("user");

?>