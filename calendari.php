<html>
<body>
	<?php
		$diesset = array("Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissabte","Diumenge");
		$diamax;
		$dia = 1;
		if(date("m") == "01" || date("m") == "03" || date("m") == "05" || date("m") == "7" || date("m") == "10" || date("m") == "12") {
			$diamax = 31;
		}
		elseif (date("m") == "04" || date("m") == "06" || date("m") == "08" || date("m") == "09" || date("m") == "11") {
			$diamax = 30;
		}
		elseif (date("m") == "02") {
			$diamax = 28;
		}

		echo"<H1>Calendari</H1>";
		echo"<br>";
		$files = 6; 
		$columnes = 7;
		echo '<table border="1">';
		for($i=1;$i<=$files;$i++){ echo '<tr>';
			if($i < 2){
 				for($j=0;$j<$columnes;$j++){ echo '<td>' . $diesset[$j] . '</td>'; }
 				echo '</tr>';
						}
			else
			{	
				for($j=0;$j<$columnes;$j++){
					if($dia <= $diamax) {
					echo '<td>' . $dia . '</td>';
					$dia += 1;
				}}
 				echo '</tr>';
				}
			}
		echo '</table>';
	?>
</body>
</html>