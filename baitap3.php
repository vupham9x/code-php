<?php

echo '<b>(bài tập 3) tổng của mảng </b><br>';

//hướng hàm
function tong($arr){//ham tinh tong

//hàm tính tổng của mảng array_sum($array);

$n = count($arr); //so pt cua mang

	$tong = 0;

	for ($i=0; $i < $n ; $i++) { //lặp theo for
		
		$tong = $tong + $arr[$i];

	}return $tong;

	// for ($i=0; $i < 5 ; $i++) { 
		
	// 	$tong = $tong + $arr[$i];

	// }return $tong;

}

$arr = array(1,2,3,4,5);

print_r($arr);
echo "<br>";
echo "Tổng của mảng: [theo hướng hàm]= ".tong($arr);
echo "<br>";
?>


<?php

//hướng thủ tục

$htt = array(1,2,3,4,5,6);

$tong = count($htt);

$sum = 0;

$i = 0;

while ($i <= $tong) {//lặp theo while
	
	$sum = $sum + $i;
	$i++;

}

print_r($htt);
echo "<br>";
echo "Tổng của mảng: [theo hướng thủ tục]= ".$sum;


?>