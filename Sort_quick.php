<?php
// 封装排序函数 插入快速法测试10万数据排序效率
function quickSort(&$arr)
{
    // 先判断是否需要继续进行
    $length = count($arr);
    if ($length <= 1) {
        return $arr;
    }
    
    // 选择一个标尺 选择第一个元素
    $base_num = $arr[0];
    // 遍历 除了标尺外的所有元素，按照大小关系放入两个数组内
    // 初始化两个数组
    $left_array = array(); // 小于标尺的
    $right_array = array(); // 大于标尺的
    for ($i = 1; $i < $length; $i ++) {
        if ($base_num > $arr[$i]) {
            
            $left_array[] = $arr[$i];
        } else {
            
            $right_array[] = $arr[$i];
        }
    }
    // 再分别对 左边 和 右边的数组进行相同的排序处理方式
    // 递归调用这个函数,并记录结果
    $left_array = quickSort($left_array);
    $right_array = quickSort($right_array);
    // 合并左边 标尺 右边
    return array_merge($left_array, array(
        $base_num
    ), $right_array);
}

$arr = array();
for ($i = 0; $i < 500000; $i ++) { // 10w超过最大处理时间 此方法排序比插入排序快
    $arr[$i] = rand(- 2000, 5000);
}
//快速排序》插入排序效率》选择排序》冒泡排序
//1w数据排序1s内  10w 3s  50w 18s 
echo date("Y-m-d H:i:s",time())."<br><br>";
quickSort($arr);
var_dump($arr);
echo "<br><br>".date("Y-m-d H:i:s",time())."<br>";

?>