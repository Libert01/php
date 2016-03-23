<?php
$im = imagecreatetruecolor(600, 300);

$red = imagecolorallocate($im, 255, 0, 0);
$w =imagecolorallocate($im, 255, 255,255);

imagefill($im, 0, 0, $w );
//圆形
imageellipse($im, 15, 15, 30, 30, $red);
//填充圆形
imagefilledellipse($im, 60, 15, 30, 30, $red);

//直线
imageline($im, 0, 0, 600, 300, $red);
imageline($im, 0, 300, 600, 0, $red);

//矩形
imagerectangle($im, 0, 0, 60, 60, $red);
//填充矩形
imagefilledrectangle($im, 80, 0, 150, 60, $red);

//弧形
imagearc($im, 0, 120, 120, 60, 0, 90, $red);
//扇形
imagefilledarc($im, 0, 120, 120, 60, 270, 360, $red, IMG_ARC_PIE);

//拷贝图片到画布
$srci=imagecreatefromjpeg("learn.jpg");
$srcinfo = getimagesize("learn.jpg");
imagecopy($im, $srci, 0, 200, 0, 0, $srcinfo[0], $srcinfo[1]) ;

//写入文字
$str = "lalala德玛西亚.";
$st = "lalala诺克萨斯.";
//imagestring($im, 20, 200, 100, $str, $red);
imagettftext($im, 14, 15, 200, 110, $red, "SIMHEI.TTF", $str);
imagettftext($im, 14, 15, 100, 110, $red, "SIMHEI.TTF", $st);

//颜色填充
header("content-type:img/jpg");

$b=imagecolorallocate($im, 50, 190, 255);
$g=imagecolorallocate($im, 180, 180, 180);

$dr=imagecolorallocate($im, 155, 14, 0);
$db=imagecolorallocate($im, 24, 96, 156);
$dg=imagecolorallocate($im, 100, 100, 100);

for($i=260;$i>160;$i--){
    
    imagefilledarc($im, 300, $i, 100, 40, 0, 35, $dg, IMG_ARC_PIE);
    imagefilledarc($im, 300, $i, 100, 40, 35, 80, $db, IMG_ARC_PIE);
    imagefilledarc($im, 300, $i, 100, 40, 80, 360, $dr, IMG_ARC_PIE);
    
}
imagefilledarc($im, 300, 160, 100, 40, 0, 35, $g, IMG_ARC_PIE);
imagefilledarc($im, 300, 160, 100, 40, 35, 80, $b, IMG_ARC_PIE);
imagefilledarc($im, 300, 160, 100, 40, 80, 360, $red, IMG_ARC_PIE);

imagejpeg($im);

imagedestroy($im);

?>
