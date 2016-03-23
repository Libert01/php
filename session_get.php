<?php
session_start();
var_dump($_SESSION["int"]);
echo "<br><br>";

var_dump($_SESSION["flo"]);
echo "<br><br>";

var_dump($_SESSION["str"]);
echo "<br><br>";

var_dump($_SESSION["boo"]);
echo "<br><br>";

var_dump($_SESSION["arr"]);
echo "<br><br>";

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

var_dump($_SESSION["obj"]);
echo "<br><br>";
$_SESSION["obj"]->cry();

echo "<br><br>";
var_dump($_SESSION["host"]);


