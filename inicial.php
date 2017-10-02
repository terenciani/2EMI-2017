<!DOCTYPE html>

<html>
	<head>
		<title>Med WBS</title>
		<link rel="stylesheet" 
			href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" 
			href="css/estilo.css" />
	</head>
	
	<body id="valor-sensivel">
		<div class="container">
			<h1 class="titulo"> Fórmula da Quantidade de Calor Sensível </h1>
			<p class="explicacao">Calor sensível é aquele que provoca apenas uma variação de temperatura dos corpos, diferenciando-se do calor latente, que muda a estrutura física dos mesmos. O calor específico determina a quantidade de calor que uma unidade de massa precisa perder ou ganhar para que aconteça uma redução ou elevação de uma unidade de temperatura sem, contudo, alterar sua estrutura. Assim, se o corpo é sólido, continua sólido, se é líquido continua líquido e, se é gasoso, continua gasoso.
			<p>O calor sensível é medido em cal/g.Cº. Essa medição irá nos informar a quantidade de calor (cal) que uma quantidade de massa (g) leva para aumentar ou diminuir sua temperatura (ºC). O calor sensível também é chamado de calor específico e se refere a uma unidade de massa, portanto não depende da massa do material considerado.</p>
			<button class="btn btn-default btn-block"  data-toggle="modal" data-target="#formCalculadora">Calcule Aqui</button>
			
		</div>
		<div id="formCalculadora" class="modal fade" role="dialog">
  			<div class="modal-dialog">
			    <!-- Modal conteúdo-->
			    <div class="modal-content">
      				<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">&times;</button>
        					<h4 class="modal-title">Cadastre-se</h4>
      				</div>
      				<div class="modal-body">
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
				    <div class="modal-footer">
				    	<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
				    </div>
    			</div>
  			</div>
  		</div>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	
  		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	
	</body>
</html>