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
$q=random(12);
var_dump($q);

$w=array(9,2,6,5,1,3);

Echo "<br>Tablica przed sortowaniem:  ";
print_r($w);

function babelkowe(array &$r){
	for ($e=0;$e<count($r);$e++){
	
	echo "<div>pętla nr [$e]</div>";	
		for ($i=count($r)-1;$i>=1;$i--)
		{	//echo $i;
			//echo $r[count($r)-1];
			//if ($i==0){echo "<div>$r[$i]</div>";return 0;}
			//if ($i==count($r)-1){echo "<div>kkkkkoniec $i=$r[$i]</div>";break;}
			if ($r[$i]<$r[$i-1])
			{
			
			echo "<div>$r[$i] mniejsze od".$r[$i-1]."</div>";
				$bufor=$r[$i];
				$r[$i]=$r[$i-1];
				$r[$i-1]=$bufor;
				
			}
		
		//echo "<div>wwww$r[$i]</div>";
		}
	}
}

babelkowe($q);
echo "<br>Tablica po sortowaniu: ";
print_r($q);
?>
