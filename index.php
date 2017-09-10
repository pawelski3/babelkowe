<style>
body{
	background-color:black;
	color:white;
	
}

</style>
<?php
function random ($e){
	for ($i=0;$i<=$e;$i++)
	{
		$tab[]=rand(1,100);
	}
	return $tab;
}
$q=random(16);




Echo "<br>Tablica przed sortowaniem:  ";
echo "<pre>";
print_r($q);
echo "</pre>";
function babelkowe(array &$r){
	print "Sortowanie bąbelkowe rosnąco:";
	for ($e=0;$e<count($r);$e++){
	
	echo "<div>pętla nr $e<ul>";	
		for ($i=count($r)-1;$i>=1;$i--)
		{	
			if ($r[$i]<$r[$i-1])
			{
			$bufor=$i-1;
			echo "<li>$r[$i] z pozycji $i zostało zamienione z ".$r[$i-1]." z pozycji $bufor</li>";
				$bufor=$r[$i];
				$r[$i]=$r[$i-1];
				$r[$i-1]=$bufor;
				
			} 
		
		}
		echo "</ul></div>";
	}
}

babelkowe($q);
echo "<br>Tablica po sortowaniu: ";
echo "<pre>";
print_r($q);
echo "</pre>";
?>
