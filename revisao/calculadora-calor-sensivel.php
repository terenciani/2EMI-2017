<?php
	$quantidadeDeCalorSensivel 	= $_GET['calor-sensivel'];
	$massa						= $_GET['massa'];
	$calorEspecifico			= $_GET['calor-especifico'];
	$temperaturaFinal			= $_GET['temperatura-final'];
	$temperaturaInicial			= $_GET['temperatura-inicial'];
	
	if($quantidadeDeCalorSensivel==""){
		$deltaT = $temperaturaFinal - $temperaturaInicial;
		$quantidadeDeCalorSensivel = $massa * $calorEspecifico * $deltaT;
		echo "A quantidade de calor sensível é: $quantidadeDeCalorSensivel";
	}
	if($massa==""){
		$deltaT = $temperaturaFinal - $temperaturaInicial;
		$massa = $quantidadeDeCalorSensivel / ($calorEspecifico * $deltaT);
		echo "A massa é: $massa";
	}
	if($calorEspecifico==""){
		
	}

?>