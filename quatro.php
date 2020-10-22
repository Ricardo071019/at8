<?php

$pararloop = 28;

//Este for é executado indefenitivamente

for ($numero = 0 ; ; $numero++) { 
	if($numero == $pararloop){
		//este break obriga o ciclo for 
		break;
	}
	echo $numero.'<br>';
}
?>