<?php

echo '<b>(bài tập 4) tổng các giá trị lẻ, chẵn <br></b>';

$arr = [1,2,3,4,5,6];

$n = count($arr);//tong pt cua mang

echo "Mảng đã cho: [";
foreach ($arr as $pt) {
	
	printf($pt);

}
echo "]";

$tongle = 0;
$tongchan = 0;

for ($i=0; $i <= $n ; $i++) { 
	
	if ($i % 2 != 0 ) {
		
		$tongle = $tongle + $i;

	}else{

		$tongchan = $tongchan + $i;
	}

} 

// $i = 0;
// $tongchan = 0;

// while ($i <= $n) {
	
// 	if ($i % 2 == 0) {

// 		$tongchan = $tongchan + $i;

// 	}$i++;

// }

echo "<br>";
echo "Tổng chẵn :".$tongchan;
echo "<br>";
echo "Tổng lẻ :".$tongle;

?>