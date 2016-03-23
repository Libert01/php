<?php

//验证码文字生成
$code = "";
for($i=0;$i<4;$i++){
    $code  .= dechex(rand(0,15));
}

//存入session
session_start();
$_SESSION["code"]=$code;

//创建画布
$img = imagecreatetruecolor(110, 30);
$red = imagecolorallocate($img, 255, 255, 255);

//随机线条
for($i=0;$i<60;$i++){
    imageline($img, rand(0,75), rand(0,20), rand(50,110), rand(10,30),
    imagecolorallocate($img, rand(0,255), rand(0,255), rand(0,255)));

}

for($i=0;$i<300;$i++){
    imagesetpixel($img, rand(0,110), rand(0,30), 
    imagecolorallocate($img, 100, 100, 100));
}


//imagestring($img, rand(2,5), rand(10,80), rand(0,15), $code, $red);
imagettftext($img, rand(14,20), rand(-15,15), rand(10,70), rand(18,26), 
    $red, "SIMHEI.TTF", $code);

header("content-type:image/png");
imagepng($img);

?>
