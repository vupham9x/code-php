<?php
//sắp xếp mảng nổi bọt
$mang = array(1, 5, 9, 2, 4, 9); // mảng khai báo
$mang1 = array(1, 5, 9, 2, 4, 9); 
$sophantu = count($mang); //so pt cua mang
$sophantu1 = count($mang1); //so pt cua mang
// Sắp xếp mảng tăng dần
for ($i = 0; $i < ($sophantu - 1); $i++)
{
    for ($j = $i + 1; $j < $sophantu; $j++) // lặp các phần tử phía sau
    {
        if ($mang[$i] > $mang[$j]) // nếu phần tử $i bé hơn phần tử phía sau
        {
            // hoán vị
            $tmp = $mang[$j];
            $mang[$j] = $mang[$i];
            $mang[$i] = $tmp;
        }
    }
}

// Sắp xếp mảng giảm dần
for ($i = 0; $i < ($sophantu1 - 1); $i++)
{
    for ($j = $i + 1; $j < $sophantu1; $j++) // lặp các phần tử phía sau
    {
        if ($mang1[$i] < $mang1[$j]) // nếu phần tử $i bé hơn phần tử phía sau
        {
            // hoán vị
            $tmp = $mang1[$j];
            $mang1[$j] = $mang1[$i];
            $mang1[$i] = $tmp;
        }
    }
}

// Hiển thị các phần tử của mảng đã sắp xếp
for ($i = 0; $i < $sophantu; $i++){
    echo $mang[$i] . ' ';
}
echo "<br>";
// Hiển thị các phần tử của mảng đã sắp xếp
for ($i = 0; $i < $sophantu; $i++){
    echo $mang1[$i] . ' ';
}
?>