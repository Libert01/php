<?php
$mem = new Memcache();
$mem->connect("192.168.1.253");
var_dump($mem->get("arr"));