<meta charset=utf-8 >
<?php

class person
{

    public $name;

    public $hao;
    
    public static $num=0;

    function __construct($name, $hao)
    {
        $this->name = $name;
        $this->hao = $hao;
    }

    function jion()
    {
        person::$num ++;
        echo $this->hao . "--" . $this->name . "  加入梁山...<br>";
    }
}

// new person
$p1 = new person("林冲","豹子头");
$p1->jion();

$p2 =new person("花荣","小李广");
$p2->jion();

$p3 =new person("鲁智深","花和尚");
$p3->jion();

$p3 =new person("吴用","智多星");
$p3->jion();
// 看看有多少人玩游戏
echo "梁山现有<b> ".person::$num."</b>名好汉."

?>
