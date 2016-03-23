<meta charset="utf-8">
<?php
$bookid = $_GET["bookid"];
$bookname = $_GET["bookname"];

session_start();
$_SESSION[$bookid] = $bookname;

echo "成功加入购物车.<br><br>";

echo "<a href='car_product.html'>返回继续购买</a><br>";
echo "<a href='car_show.php'>查看购物车</a>";

?>