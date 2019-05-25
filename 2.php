
<?php 
  
// function untuk mendapatkan semua tanggal dalam rentang yang diberikan
function getDatesFromRange($start, $end, $format = 'Y-m-d') { 
      
    // deklarasi array
    $array = array(); 
      
    // Variabel yang menyimpan interval tanggal
    // dari periode 1
    $interval = new DateInterval('P1D'); 
  
    $realEnd = new DateTime($end); 
    $realEnd->add($interval); 
  
    $period = new DatePeriod(new DateTime($start), $interval, $realEnd); 
  
    // gunakan loop untuk menyimpan data array 
    foreach($period as $date) {                  
        $array[] = $date->format($format);  
    } 
  
    // Return ke element array
    return $array; 
} 
  
//  function dengan melewati tanggal awal dan tanggal akhir
$Date = getDatesFromRange('2019-11-01', '2019-11-05'); 
  
var_dump($Date); 
  
?> 
