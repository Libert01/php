<meta charset=utf-8 >
<?php
function showTable($tab){
    $mysqli = new mysqli("localhost","root","/123","world");
    
    if($mysqli->connect_error){
        die("connect failed <br>".$mysqli->connect_error);
    }
    
    $sql = "select * from $tab";
    
    $res = $mysqli->query($sql);
    
    echo "rows: ".$res->num_rows." cols: ".$res->field_count;
    echo "<table><tr>";
    while(($fd = $res->fetch_field()) !=false){
        echo "<th>$fd->name</th>";
    }
    echo "</tr>";
    
    while(($row = $res->fetch_row()) !=false){
        echo "<tr>";
        foreach($row as $k=>$v){
            echo "<td>$v</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    
    $res->free();
    $mysqli->close();
}

showTable("user");

?>
