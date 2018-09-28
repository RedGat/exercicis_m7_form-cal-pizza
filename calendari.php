<html>
<body>
	<?php
		$dies = array("Dilluns","Dimarts","Dimecres","Dijous","Divendres","Dissabte","Diumenge");
		$dia = 1;
		echo"<H1>Calendari</H1>";
		echo"<br>";
		$files = 6; 
		$columnes = 7;
		echo '<table border="1">';
		for($i=1;$i<=$files;$i++){ echo '<tr>';
			if($i < 2){
 				for($j=0;$j<$columnes;$j++){ echo '<td>' . $dies[$j] . '</td>'; }
 				echo '</tr>';
						}
			else
			{
				for($j=0;$j<$columnes;$j++){ echo '<td>' . $dia . '</td>';
											$dia += 1; }
 				echo '</tr>';
						}
				}
		echo '</table>';

	?>
</body>
</html>