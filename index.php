<style>
body{
	background-color:black;
	color:white;
	
}

</style>
<?php

$w=array(9,2,6,5,1,3);

Echo "Tablica przed sortowaniem:  ";
print_r($w);

function babelkowe(array &$r){
	for ($e=6;$e>=0;$e--){
		
		for ($i=count($r)-1;$i>=0;$i--)
		{
			//echo $r[count($r)-1];
			if ($i==0){echo "<div>$r[$i]</div>";return 0;}
			if ($r[$i]>$r[$i-1])
			{
				
				$bufor=$r[$i];
				$r[$i]=$r[$i-1];
				$r[$i-1]=$bufor;
				
			}
		
		echo "<div>$r[$i]</div>";
		}
	}
}

babelkowe($w);
echo "<br>Tablica po sortowaniu: ";
print_r($w);
?>
