<style>
body{
	background-color:black;
	color:white;
	
}

</style>
<?php

$w=array(9,2,6,5,1,3);
print_r($w);

function babelkowe(array &$r){
	for ($i=0;$i<=count($r)-1;$i++)
	{
	echo "<div>$r[$i]</div>";
	}
}

babelkowe($w);

?>
