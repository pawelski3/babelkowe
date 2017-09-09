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
	for ($e=0;$e<=6;$e++){
	
	echo "<div>$e</div>";
		for ($b=0;$b<4;$b++)
		{printf("<a>%d</a>",$b);}
	}
}

babelkowe($w);
echo "<br>Tablica po sortowaniu: ";
print_r($w);
?>
