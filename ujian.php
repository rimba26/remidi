<?php
$merk = [
    ["Iphone", "Iphone 12 Pro Max", 42000000],
    ["Iphone", "Iphone 11 Pro max", 24000000],
    ["Samsung", "Samsung Galaxy Fold Z2", 34000000],
    ["Xiaomi", "Xioami MI 10", 10000000],
    ["Realme", "Realme X3 Zoom", 8000000],
    ["Asus", "Asus ROG 3", 14000000]
];

$temp_arr=[];
foreach($merk as $key)
{
    $temp_arr[]=$key[0];
}
$pilihan=array_unique($temp_arr);
// var_dump($pilihan);
foreach($pilihan as $key_x)
{
    echo $key_x."\n";
}
