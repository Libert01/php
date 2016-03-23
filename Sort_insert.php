<?php
// 封装排序函数 插入排序法测试10万数据排序
function selectSort(&$arr)
{
    // 默认第一个数有序 第二个数开始往前比较插入位置
    for ($i = 1; $i < count($arr) ; $i ++) {
        // 准备插入的数
        $inval = $arr[$i];
        // 与前一个比较
        $index = $i - 1;
        while ($index >= 0 && $inval < $arr[$index]) {
            $arr[$index + 1] = $arr[$index];
            $index --;
        }
        $arr[$index + 1] = $inval;
    }
}

$arr = array();
for ($i = 0; $i < 10000; $i ++) { // 10w超过最大处理时间 此方法排序比选择排序快 
    $arr[$i] = rand(- 2000, 5000);
}
//插入排序效率》选择排序》冒泡排序
//1w数据排序10s   还有个快速排序效率更高
echo date("Y-m-d H:i:s",time())."<br><br>";
selectSort($arr);
var_dump($arr);
echo "<br><br>".date("Y-m-d H:i:s",time())."<br>";

?>