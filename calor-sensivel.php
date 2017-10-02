<?php
	$calorSensivel 		= $_GET['cleyton']; 
	$massa 				= $_GET['massa'];
	$calorEspecifico 	= $_GET['calor-especifico'];
	$temperaturaFinal 	= $_GET['temperatura-final'];
	$temperaturaInicial = $_GET['temperatura-inicial'];
	
	if ($calorSensivel==""){
		$deltaT = $temperaturaFinal - $temperaturaInicial;
		$calorSensivel = $massa * $calorEspecifico * $deltaT;
		echo "A quantidade de calor sensível é: $calorSensivel (ºC)";
	}
	if ($massa==""){
		$deltaT = $temperaturaFinal - $temperaturaInicial;
		$massa = $calorSensivel / ($calorEspecifico * $deltaT);
		echo "A massa é: $massa (kg)";
	}
	if ($calorEspecifico==""){
		$deltaT = $temperaturaFinal - $temperaturaInicial;
		$calorEspecifico = $calorSensivel / ($massa * $deltaT);
		echo "O calor específico é: $calorEspecifico (ºC)";
	}
	if ($temperaturaFinal==""){
		$temperaturaFinal = ($calorSensivel / ($massa * $calorEspecifico)) + $temperaturaInicial;
		echo "A temperatura final é: $temperaturaFinal (ºC)";
	}
	if ($temperaturaInicial==""){
		$menosTemperaturaInicial = ($calorSensivel / ($massa * $calorEspecifico)) - $temperaturaFinal;
		$temperaturaInicial = $menosTemperaturaInicial * -1;
		echo "A temperatura inicial é: $temperaturaInicial (ºC)";
	}


?>