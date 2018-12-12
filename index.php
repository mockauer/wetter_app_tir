<?php
	
	include("db_connect.php");
	
	
		$query ="SELECT * FROM `wetter` ORDER BY `wetter`.`datum` DESC ";
		$all=$mysqli->query($query);
		
		 while ($dsatz=  $all->fetch_assoc()){
			  $dsatz['datum'] . " - " . $dsatz['wetter'] . " - ".$dsatz['temperatur'];
		 }
?>
