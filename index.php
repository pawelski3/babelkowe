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
	for ($e=0;$e<count($r);$e++){
	
	echo "<div>ble $r[$e]</div>";	
		for ($i=0;$i<count($r);$i++)
		{	//echo $i;
			//echo $r[count($r)-1];
			//if ($i==0){echo "<div>$r[$i]</div>";return 0;}
			if ($e==4){echo "<div>kkkkkoniec $r[$i]</div>";return 0;}
			if ($r[$i]<$r[$i+1])
			{
			
			echo "<div>$r[$i] większe od".$r[$i+1]."</div>";
				/*$bufor=$r[$i];
				$r[$i]=$r[$i-1];
				$r[$i-1]=$bufor;*/
				
			}
		
		//echo "<div>wwww$r[$i]</div>";
		}
	}
}

babelkowe($w);
echo "<br>Tablica po sortowaniu: ";
print_r($w);
?>
