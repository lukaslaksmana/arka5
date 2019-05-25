<?php 

$nama = 'programmer';
echo $nama;
echo "<br>";
// mengubah string ke array
$nama_arr = str_split($nama);
$vocal	  = ['a', 'e', 'i', 'u' ,'o'];

$found = array_intersect($vocal, $nama_arr);
//menghitung jumlah element dalam array
$count = array_count_values($nama_arr);
 
//output
$result =[];

foreach ($found as $item) {
	$result[$item] = $count[$item];

}
var_dump($result);
 ?>