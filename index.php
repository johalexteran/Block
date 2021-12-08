<?php

	if (isset($_POST['guardar']))
	{
		$direc=$_POST['direc'];

	$dir="$direc";
			if(!is_dir($dir)){
					mkdir($direc);
					}
			}

	if (isset($_POST['guardartxt']))
	{
		$contenido = $_POST['contenido'];
		$archivo = fopen('Archivo de Texto.txt','a');
		fputs($archivo,$contenido);
			}
		 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.min.css">
    <title>Directorio y Archivo TXT </title>
</head>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>

<body>

<form method="post" class="box">
    <h1>Crear Directorio</h1>

    <div class="form-group col-md-8">
        <label>Nombre de Directorio</label>
        <input class="form-control" type="text" name="direc">
    </div>
    <div class="">
        <button class="btn btn-primary"
            type="submit" name="guardar">Crear
        </button>
    </div>

</form>
<form method="post" class="box">
    <h1>Crear Archivo TXT</h1>

    <div class="form-group col-md-8">
        <label>Contenido del Archivo TXT</label>
        <input class="form-control" type="text" name="contenido">
    </div>
    <div class="">
        <button class="btn btn-primary"
            type="submit" name="guardartxt">Crear
        </button>
    </div>
</form>
</body>

</html>