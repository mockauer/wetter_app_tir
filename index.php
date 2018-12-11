<?php
	
	$zufallszahl = rand(0,5);
	$wetter = "";
	
	switch ($zufallszahl){
		case 0:
			$wetter = "sonnig";
			echo "sonnig";
			break;
		case 1:
			$wetter = "leicht bedeckt";
			echo "leicht bedeckt";
			break;
		case 2:
			$wetter = "stark bedeckt";
			echo "stark bedeckt";
			break;
		case 3:
			$wetter = "regen";
			echo "regen";
			break;
		case 4:
			$wetter = "sturm";
			echo "sturm";
			break;
		case 5: 
			$wetter = "gewitter";
			echo "gewitter";
			break;
		}
		
		
	
	
?>
