<?php 
 	$ubah = 'purwakarta';
 	$jadi = str_split($ubah);
 	for ($i=0; $i < count($jadi); $i++) { 
 		$jadi[4] = 'o';
 		$jadi[6] = 'e';
 		$jadi[9] = 'o';
 		echo $jadi[$i];
 	}

 ?>