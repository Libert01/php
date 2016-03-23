<meta charset=utf-8 >
<?php

class cat
{

    public $name;

    public $color;

    function __construct($in, $ic)
    {
        $this->name = $in;
        $this->color = $ic;
    }

    function __destruct()
    {
        echo "<br>释放资源" . $this->name;
    }
}
$c1 = new cat("hua", "yellow");
$c2 = new cat("gou", "yellow");
$c3 = new cat("cat", "yellow");

$a = $c2->name;
