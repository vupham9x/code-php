<?php

$a = [1,2,3,4,5];

$i = 0;
$tong = 0;
while ($i < 5) {
	
	if($i % 2 == 0 ){

	 $tong = $tong + $a[$i];

	}$i++;

}

echo $tong;

?>