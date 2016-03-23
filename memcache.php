<?php

$mem = new Memcache();

$mem->connect("localhost");

$mem->set("num",3.14);
$mem->set("arr",array(1,5,"lan","a"=>"其"));

echo "success";


?>