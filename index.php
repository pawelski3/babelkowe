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
	$r[]="vv";
	var_dump ($r);
}

babelkowe($w);
print_r ($w);
?>
