<?php include 'cebecera.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Calculadora de nota necesaria</title>
  <link rel="stylesheet" href="styles2.css">
</head>
<body>
	<br>
	<br>
	<div class="container p-4">
	  <div class="row">
	    <div class="col-md-4 mx-auto" >
	      <div class="card card-body">
	      <form action="" method="POST">
	        <div class="text-center">
						<h4 for="" class="">CALCULA LA NOTA PARA GANAR</h4>


	        </div>
	        <br>
	        <div class="form-group">
						<label for="nota1" class="form-label">Nota 1:</label>
						<input type="number" class="form-control" id="nota1" name="nota1" min="0" max="10" step="0.1" required>
	        </div>
	        <br>
	        <div class="form-group">
						<label for="nota2" class="form-label">Nota 2:</label>
			  		<input type="number" class="form-control" id="nota2" name="nota2" min="0" max="10" step="0.1" required><br><br>
	        </div>
					<div class="text-center">
						<?php
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$nota1 = $_POST["nota1"];
							$nota2 = $_POST["nota2"];

							$nota_necesaria = (3.0 - 0.3*$nota1 - 0.3*$nota2) / 0.4;

							if ($nota_necesaria <= 0) {
								echo "¡Felicidades! Ya has aprobado la asignatura.";


							} elseif ($nota_necesaria >5) {
					      echo "Lo siento, con estas notas no puedes ganar";

					    }

					    else {
								echo "Necesitas sacar al menos un " . round($nota_necesaria, 1) . " en la tercera nota para aprobar la asignatura.";
							}
						}
						?>
					</div>
	        <br>
	        <div class="text-center">
						<input class="btn btn-primary"type="submit" value="Calcular">

	        </div>
	      </form>
	      </div>
	    </div>
	  </div>
	</div>
  <br>
  <br>
  <br>



</body>
</html>
