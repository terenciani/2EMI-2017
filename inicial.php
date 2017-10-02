<!DOCTYPE html>

<html>
	<head>
		<title>Med WBS</title>
		<link rel="stylesheet" 
			href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" 
			href="css/estilo.css" />
	</head>
	
	<body>
		<div class="container">
			<h1> Fórmula da Quantidade de Calor Sensível </h1>
			<p>Explicação da fórmula</p>
			<form action="calor-sensivel.php" method="GET">
				<div class="form-group">
					<label>Quantidade de Calor Sensível (Q)</label>
					<input type="text" name="calor-sensivel" class="form-control" />
				</div>
				<div class="form-group">
					<label>Massa (m)</label>
					<input type="number" name="massa" class="form-control" />
				</div>
				<div class="form-group">
					<label>Calor Específico (c)</label>
					<input type="number" name="calor-especifico" class="form-control"  />
				</div>
				<div class="form-group">
					<label>Temperatura Final</label>
					<input type="number" name="temperatura-final" class="form-control" />
				</div>
				<div class="form-group">
					<label>Temperatura Inicial</label>
					<input type="number" name="temperatura-inicial" class="form-control" />
				</div>
				<input type="submit" value="Calcular" class="form-control" />
				<input type="reset" value="Limpar" class="form-control" />
			</form>
		</div>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	
  		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
	</body>
</html>