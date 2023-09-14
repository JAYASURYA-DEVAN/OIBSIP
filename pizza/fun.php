<?php
$item=50;
$emp=120;
function add()
{
global $item;
$item=$item+100;
}
function empcount()
{
$emp=420;
}
echo "initial=".$item;
echo "</br>";
add();
echo "after function add=".$item;
echo "</br>";
 empcount();
echo "aftercount=".$emp;
echo "</br>";
