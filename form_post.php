<meta charset="UTF-8">
<?php

if(!empty($_POST["name"])){
    
    echo "姓名：" . $_POST["name"] . "<br><br>";
}
if(!empty($_POST["passwd"])){
    
    echo "密码：" . $_POST["passwd"] . "<br><br>";
}
if(isset($_POST["sex"])){
    
    echo "性别："  .$_POST["sex"]."<br><br>";
}
if(isset($_POST["hobby"])){
    
    $hobby = $_POST["hobby"];
    echo "爱好：";
    foreach ($hobby as $v){
        echo $v." ";
    }
    echo "<br><br>";
}
if(isset($_POST["city"])){
    
    echo "城市：" . $_POST["city"] . "<br><br>";
}
if(isset($_POST["intro"])){
    
    echo "介绍：" . $_POST["intro"] . "<br><br>";
}
if(isset($_FILES["img"])){
    
    echo "头像：" .$_FILES["img"]["name"]. "<br><br>";
}



?>

