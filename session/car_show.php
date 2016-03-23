<meta charset="utf-8">
<?php
echo "<h2>购物车商品</h2>";

session_start();

if (! empty($_SESSION)) {

    foreach ($_SESSION as $k => $v) {
        echo "<br>书号" . $k . "--书名" . $v;
    }
} else {
    echo "购物车暂无商品，请到商品列表添加商品";
}

echo "<br><br><a href='car_product.html'>返回继续购买</a>";

?>
