<?php
	$w = $_POST['w'];
	$gate = $_POST['gate'];
	echo 'w    : '.$w . '<br>';
	echo 'gate : '.$gate . '<br>';
	$treshold = 0.0;
	echo 'treshold : '.$treshold . '<br>';
	$rand_w = rand(0,10)/10;
	echo 'rand_w : '.$rand_w . '<br>';
	echo '======================='.'<br><br>';

	$weight = [];
	$treshold;
	$output;
	$x = 1;
	$epoch = 100;
	$and = [
		[1,0,0,0], 
		[1,0,1,0],
		[1,1,0,0],
		[1,1,1,1],
	];

	for ($i=0; $i < $w; $i++) { 
		$weight[$i] = rand(-10,10)/10;
	}

	echo '<br><br><b>HASIL</b><br><br>';

	$error = 1;
	while ($error != 0) {
		for ($i=0; $i < $w; $i++) { 
			echo 'w'.$i.' : '.$weight[$i] .'<br>';
		}
		for ($i=0; $i < 4; $i++) { 
			//Output
			$output = 0;
			for ($j=0; $j < $w; $j++) { 
				$output += ($and[$i][$j]*$weight[$j]);
			}
			
			if($output > $treshold){
				$sum = 1;
			}else{
				$sum = 0;
			}

			$error = $and[$i][3]-$sum; 
			
			if($error != 0){
				//ERROR
				echo 'hasil-'.$i.' : '. $output .' => <span style="background-color: #f44336"> 1 Error </span><br>';
				$temp = $i;
				//WEIGHT BARU
				for ($j=0; $j < $w; $j++) { 
					$weight[$j] = $weight[$j] + ($and[$i][$j]*$rand_w*$error);
				}
				break;
			}else{
				//SUCCESS
				echo 'hasil-'.$i.' : '. $output .' => <span style="background-color: #8BC34A"> 0 Success </span><br>';
				if($i==3){
					exit();
				}
			}
		}
		echo '---------------------------------<br>';
		$x++;
	}

?>