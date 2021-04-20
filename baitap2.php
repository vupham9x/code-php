<?php
echo '<b>(bài tập 2) tìm min, max với mảng 1 chiều</b> <br>';

function timmin($arr){ //khai báo hàm, tên hàm timmin có đối số $arr(tham biến).

	$n = count($arr);
	$min = $arr[0];

	for($i=1;$i<$n;$i++)
	{
		if($min > $arr[$i])
		{

			$t = $min;
			$min = $arr[$i];
			$t = $arr[$i];

		}else{

			$t = $min;
		}
		return $t;

	}

}

function timmax($arr){ //khai báo hàm, tên hàm timmin có đối số $arr(tham biến).

	$n = count($arr);
	$max = $arr[0];

	for($i=1;$i<$n;$i++)
	{
		if($max < $arr[$i])
		{

			$t = $max;
			$max = $arr[$i];
			$t = $arr[$i];
			return $t;
		}
		

	}

}

$arr = array(4,1,2,15); //khai báo mảng 1 chiều, $arr (tham trị)

echo "Min là: ".timmin($arr); //gọi hàm
echo "<br>";
echo "Max là: ".timmax($arr); //gọi hàm

?>

   