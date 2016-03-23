<?php
// 封装排序函数 冒泡排序法测试10万数据排序
function buddleSort(&$arr)
{
    for ($i = 0; $i < count($arr) - 1; $i ++) {
        $temp = 0;
        for ($j = 0; $j < count($arr) - 1 - $i; $j ++) {
            // 1--->9
            if ($arr[$j] > $arr[$j + 1]) {
                // $j一次循环 相邻两数比较 将较大值往后排
                // $i一次循环将最大值排到最后 二次将第二大值排倒数第二 ...依次类推
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
}
$arr = array();
for ($i = 0; $i < 1000; $i ++) { // 1w超过最大处理时间 fatal error 此方法排序最慢
    $arr[$i] = rand(- 2000, 5000);
}

echo date("Y-m-d H:i:s", time()) . "<br>";
buddleSort($arr);
var_dump($arr);
echo date("Y-m-d H:i:s", time()) . "<br>";
