<?php
session_start();

$_SESSION["int"] = 100;

$_SESSION["flo"] = 3.14;

$_SESSION["str"] = "alan";

$_SESSION["boo"] = true;

$_SESSION["arr"] = array(1,3.14,true,"linux");

class cat {
    public $name;
    public $age;
    public $color;
    
    function __construct($n,$a,$c){
        $this->name=$n;
        $this->age=$a;
        $this->color=$c;
    }
    function cry(){
        echo "cat miaomiao...";
    }
}

$c1 = new cat("xiaohua","2","yellow");
$_SESSION["obj"] = $c1;

$_SESSION["host"] = "loaclhost";

// unset($_SESSION["host"]);
// session_destroy();
echo "set session success."

?>

