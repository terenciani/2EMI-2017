<?php 
	if (($_GET['calor-sensivel'])==""){
		$massa = $_GET['massa'];
		$calorEspecifico = $_GET['calor-especifico'];
		$temperaturaFinal = $_GET['temperatura-final'];
		$temperaturaInicial = $_GET['temperatura-inicial'];
		$deltaT = $temperaturaFinal - $temperaturaInicial;
		$calorSensivel = $massa * $calorEspecifico * $deltaT;
		echo "A quantidade de calor sensível é: $calorSensivel (ºC)";
	}
	if (($_GET['massa'])==""){
		$calorSensivel = $_GET['calor-sensivel'];
		$calorEspecifico = $_GET['calor-especifico'];
		$temperaturaFinal = $_GET['temperatura-final'];
		$temperaturaInicial = $_GET['temperatura-inicial'];
		$deltaT = $temperaturaFinal - $temperaturaInicial;
		$massa = $calorSensivel / ($calorEspecifico * $deltaT);
		echo "A massa é: $massa (kg)";
	}
	if (($_GET['calor-especifico'])==""){
		$calorSensivel = $_GET['calor-sensivel'];
		$massa = $_GET['massa'];
		$temperaturaFinal = $_GET['temperatura-final'];
		$temperaturaInicial = $_GET['temperatura-inicial'];
		$deltaT = $temperaturaFinal - $temperaturaInicial;
		$calorEspecifico = $calorSensivel / ($massa * $deltaT);
		echo "O calor específico é: $calorEspecifico (ºC)";
	}
	if (($_GET['temperatura-final'])==""){
		$calorSensivel = $_GET['calor-sensivel'];
		$massa = $_GET['massa'];
		$calorEspecifico = $_GET['calor-especifico'];
		$temperaturaInicial = $_GET['temperatura-inicial'];
		
		$temperaturaFinal = ($calorSensivel / ($massa * $calorEspecifico)) + $temperaturaInicial;
		echo "A temperatura final é: $temperaturaFinal (ºC)";
	}
	if (($_GET['temperatura-inicial'])==""){
		$calorSensivel = $_GET['calor-sensivel'];
		$massa = $_GET['massa'];
		$calorEspecifico = $_GET['calor-especifico'];
		$temperaturaFinal = $_GET['temperatura-final'];
		
		$menosTemperaturaInicial = ($calorSensivel / ($massa * $calorEspecifico)) - $temperaturaFinal;
		$temperaturaInicial = $menosTemperaturaInicial * -1;
		echo "A temperatura inicial é: $temperaturaInicial (ºC)";
	}


?>