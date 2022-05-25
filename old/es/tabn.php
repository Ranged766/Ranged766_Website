<html>
    
    <head>
        <meta charset="utf-8">
        <title>PHP</title>
    </head>
    <body>
        
        <?php
		$elenco=array("Sperandio","Forcolin","Morao","Zanette","Zougag","Forcolin","Bergamo","Zanatta","Petrillo","Deninno","Pavan","Salamone","Zamoner","Vergari","Florea","Krystal","Ferati","Franceschet","Sun");
		
		echo '<table style="border: solid black;height:15rem;width:15rem">';
		for($j=0;$j<=7;$j++){
			
			echo "<tr>";
		
			for($i=0;$i<=7;$i++){
				
				if($j%2==0){
					if($i%2==0){
						echo'<th style="background-color: black";>';
						echo $elenco[rand(0, 18)];
						echo "</th>";
					}else{
						echo "<th>";
						echo $elenco[rand(0, 18)];
						echo "</th>";
					}
				}else{
					if($i%2!=0){
						echo'<th style="background-color: black">';
						echo $elenco[rand(0, 18)];
						echo "</th>";
					}else{
						echo "<th>";
						echo $elenco[rand(0, 18)];
						echo "</th>";
					}					
				}
				
			}
		}
		echo "</tr>";
		echo "</table>";
		
		?>
    </body>
</html>