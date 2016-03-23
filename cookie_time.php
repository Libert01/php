<meta charset=utf-8>
<?php
if (empty($_COOKIE["time"])) {
    
    echo "frist login";
    setcookie("time", time(), time() + 3600);
    
} else {
    
    echo "last login " . date("Y-m-d H:i:s", $_COOKIE["time"]);
    setcookie("time", time(), time() + 3600);
    
}

?>
