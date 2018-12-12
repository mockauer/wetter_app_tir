<?php
	include("../connect_db.php");
	
	
		$query ="SELECT * FROM `wetter` ORDER BY `wetter`.`datum` DESC LIMIT 1";
		$all=$mysqli->query($query);
		
		 while ($dsatz=  $all->fetch_assoc()){
			 echo "Das Wetter vom " . $dsatz['datum']."<br/>";
			 echo "<strong>".$dsatz['temperatur']."°C</strong><br/>";
			 echo "<img src='img/".$dsatz['wetter'].".png' />";
		 }

?>
