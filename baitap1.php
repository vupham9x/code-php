<?php
echo '<b>(bài tập 1) Khai Báo mảng, Duyệt mảng</b>';

//khao báo mảng 2 chiều
echo "<h3>Danh sách hóa đơn <br></h3>";

$Bill = array(

'ID01'=>array(

'fullname'=>'Nguyễn Thanh Nhàn',
'products'=>'Sữa vinamilk',
'unit'=>'hộp',
'quantity'=>'20',
'price'=>' 5000 vnđ',
'total'=>'100.000 vnđ'
),

'ID02'=>array(

'fullname'=>'Nguyễn Khánh Hào',
'products'=>'Khăn giấy',
'unit'=>'hộp',
'quantity'=>'15',
'price'=>' 10.000 vnđ',
'total'=>'150.000 vnđ'
),

'ID03'=>array(

'fullname'=>'Phan Thị Thanh Hà',
'products'=>'Tả giấy baby',
'unit'=>'bịch',
'quantity'=>'5',
'price'=>' 35.000 vnđ',
'total'=>'175.000 vnđ'

));

//duyệt mảng
foreach ($Bill as $Id => $var) {
	
	echo "<b>Mã hóa đơn :{$Id} <br></b>";
	echo "------------------------------------ <br>";
	echo "Khách hàng:{$var['fullname']} <br>";
	echo "------------------------------------ <br>";
	echo "Sản phẩm mua :{$var['products']} <br>";
	echo "------------------------------------ <br>";
	echo "Đơn vị:{$var['unit']} <br>";
	echo "------------------------------------ <br>";
	echo "Số lượng :{$var['quantity']} <br>";
	echo "------------------------------------ <br>";
	echo "Giá bán :{$var['price']} <br>";
	echo "------------------------------------ <br>";
	echo "Tổng tiền:{$var['total']} <br>";
	echo "<br>";

}

echo "<br>";

//khai báo mảng
$chuoi = array('SV01'=>'Thành','SV02'=>'Nhân','SV03'=>'Báo','SV04'=>'Hiếu');

//duyệt mảng
//while
$n = count($chuoi);
$i = 0;
while ($i < $n ) {
	
	print_r($chuoi);
	echo "<br>";
	$i++;
}

echo "<br>";

//foreach
foreach ($chuoi as $key => $value) {
	
	print_r($key).print_r($value);
	echo "<br>";
}

echo "<br>";

//for
$number = [1,2,3,4,5,6];

for($i=0;$i<1;$i++)
{

	$number[1] = "abc";
	print_r($number[1]);
	echo "<br>";

}

//khai báo mảng

$number = [1,2,3,4,5,6];

$num2 = [0=>1,1=>2,2=>3,3=>4,4=>5,5=>6];

$so2 = ['so1'=>1,'so2'=>2,'so3'=>3,'so4'=>4,'so5'=>5,'so6'=>6];

$num = array(1,2,3,4,5,6);

$n = array(0=>1,1=>2,2=>3,3=>4,4=>5,5=>6);

$so = array('so1'=>1,'so2'=>2,'so3'=>3,'so4'=>4,'so5'=>5,'so6'=>6);

$string = array('fullname'=>'phamquocvu','age'=>'23','address'=>'vĩnh long');

$st = $string['fullname'];
$str = $string['age'];

//xuất mảng
print_r($st);
echo '<br>';
echo $str;
echo '<br>';
echo $string['address'];
echo '<br>';

print_r($so2);
echo '<br>';
print_r($num2);
echo '<br>';
print_r($so);
echo '<br>';
print_r($n);
echo '<br>';
print_r($num);
echo '<br>';
print_r($number);


?>