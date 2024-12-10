
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD con PHP usando Programación Orientada a Objetos</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
   <div class="row">
                    <div class="col-sm-8"><h2>Agregar <b>Videojuego</b></h2></div>

                </div>
            </div>
			<div class="row">
				<form action="Controllers/VideojuegoController.php" method="post">
				<div class="col-md-6">
					<label for="exampleFormControlInput1" class="form-label">Titulo:</label>
					<input type="text" name="titulo" id="titulo" class='form-control' maxlength="100" required >
				</div>
				<div class="col-md-6">
					<label>Descripción:</label>
					<input type="text" name="descripcion" id="descripcion" class='form-control' maxlength="100" required>
            </div>
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" name="submit" class="btn btn-success">Guardar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>    
	<footer>
	<div class="badge bg-primary text-wrap" style="width: 6rem;">
  This text should wrap.
</div>
</footer> 
</body>
<?php
 include("Controllers/VideojuegoController.php");
 ?>
</html>