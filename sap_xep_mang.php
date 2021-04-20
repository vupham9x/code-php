<?php

$arr = array(1,4,2,9,8,7,3,10);

sort($arr); //vị trí và giá trị tằng dần

print_r($arr);

echo "<br>";
rsort($arr); //vị trí tằng dần, giá trị giảm dần

print_r($arr);

echo "<br>";
asort($arr); //vi trí giảm dần, giá trị tăng dần

print_r($arr);

?>