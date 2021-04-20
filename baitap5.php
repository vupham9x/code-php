
<?php

echo '<b>(bài tập 5) sắp xếp mảng tăng dần</b><br>';

function swap(&$a,&$b){

	$t=$a;
	$a=$b;
	$b=$t;
}

function Tsort($arr){

	$n = count($arr);

	for ($i=0; $i < $n ; $i++) { 

		for ($j=$i; $j < $n ; $j++) { 
			
			if($arr[$i] > $arr[$j])
			{
				swap($arr[$i],$arr[$j]);
			}
		}

	}return $arr;

}

$arr = [5,3,2,1,4];

print_r(Tsort($arr));

?>

