<?php
$param=array(1=>4,2=>3,3=>4);
print_r($param);
$serialize=serialize($param);
print_r($serialize);
$array=unserialize($serialize);
print_r($array);