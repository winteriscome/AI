<?php 
$a = array(45, 54, 8, 23, 6, 12, 99);

print_r($a);

function bubble($date){
	for ($i=0; $i < count($date); $i++) { 
		# code...
		for ($j=0; $j < count($date) - $i -1; $j++) { 
			# code..
			if ($date[$j] > $date[$j +1]) {
				# code...
				$temp = $date[$j];
				$date[$j] = $date[$j +1];
				$date[$j +1] = $temp;
			}
		}
	}

	return $date;
}
print_r(bubble($a));
?>