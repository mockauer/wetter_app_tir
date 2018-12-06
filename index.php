<?php
	
	$zufallszahl = rand(0,5);
	$wetter = "";
	
	switch ($zufallszahl){
		case 0:
			$wetter = "sonnig";
			echo "sonnig";
		case 1:
			$wetter = "leicht bedeckt";
			echo "leicht bedeckt";
		case 2:
			$wetter = "stark bedeckt";
			echo "stark bedeckt";
		case 3:
			$wetter = "regen";
			echo "regen";
		case 4:
			$wetter = "sturm";
			echo "sturm"
		case 5: 
			$wetter = "gewitter";
			echo "gewitter"
			
		}
		
		echo $wetter;
	
	
?>
