<?php
$mem = new Memcache();

$mem->connect("localhost");

var_dump($mem->get("num"));

var_dump($mem->get("arr"));
?>