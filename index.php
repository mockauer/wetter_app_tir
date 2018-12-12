<?php
	
	$zufallszahl = rand(0,4);
	$wetter = "";
	$time = time();

	$monate = array(1,2,3,4,5,6,7,8,9,10,11,12);
	$akt_monat = date("m", $time);
	
	$temperatur = array(rand(86,182),rand(104,199),rand(86,176),rand(66,147),rand(32,108),rand(24,94),rand(15,86),rand(15,85),rand(21,105),rand(34,124),rand(58,152),rand(68,142));
	
	foreach ($monate as $monat){		
		if ($monat == $akt_monat) {
			echo $temperatur[$monat-1]/10 ."<br/>";
		}
	}
	
	switch ($zufallszahl){
		case 0:
			$wetter = "sonnig";
			echo "<img src='img/sonnig.png' />";
			break;
		case 1:
			$wetter = "leicht bedeckt";
			echo "<img src='img/leichtbewolkt.png' />";
			break;
		case 2:
			$wetter = "stark bedeckt";
			echo "<img src='img/starkbewolkt.png' />";
			break;
		case 3:
			$wetter = "regen";
			echo "<img src='img/regen.png' />";
			break;
		case 4: 
			$wetter = "gewitter";
			echo "<img src='img/gewitter.png' />";
			break;
		}
		
		
	
	
?>
