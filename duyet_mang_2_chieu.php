<?php
//mảng nhiều chiều (là tập hợp các mảng 1 chiều)
$phim = array(

"hanhdong"=>array('hd1','hd2'),
"kinhdi"=>array('kd1','kd2'),
"vientuong"=>array('vt1','vt2')

);

for ($i=0; $i < 2 ; $i++) { 
	
	echo $phim["hanhdong"][0];
	echo "<br>";
}

//duyệt mảng
foreach ($phim["vientuong"] as $key => $hd) {
	
	echo $hd;
	echo "<br>";

}

//xuất mảng
echo $phim["hanhdong"][1];
echo $phim["kinhdi"][1];
echo $phim["vientuong"][1];
echo "<br>";
print_r($phim);

?>