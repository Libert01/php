<?php
// 封装排序函数 选择排序法测试10万数据排序
function selectSort(&$arr)
{
    for ($i = 0; $i < count($arr) - 1; $i ++) {
        // 默认当前$i的数组值最小
        $mival = $arr[$i];
        $midex = $i;
        // 挨个与其后的值比较 若比某数大 则将数值赋给变量$mival，直到取到最小值
        for ($j = $i + 1; $j < count($arr); $j ++) {
            if ($mival > $arr[$j]) {
                $mival = $arr[$j];
                $midex = $j;
            }
        }
        // 交换数值
        $temp = $arr[$i];
        $arr[$i] = $mival;
        $arr[$midex] = $temp;
    }
}

$arr = array();
for ($i = 0; $i < 1000; $i ++) { // 1w超过最大处理时间 此方法排序比冒泡快
    $arr[$i] = rand(- 2000, 5000);
}
//
echo date("Y-m-d H:i:s", time()) . "<br>";
selectSort($arr);
var_dump($arr);
echo date("Y-m-d H:i:s", time()) . "<br>";
