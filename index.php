<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="js/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<script src="js/validar-ajax.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcial2</title>
</head>
<body>
<?php
    if(isset($_GET)){
        if($_GET['error']==1){
            echo "Favor de correguir los datos del formulario";
        }
    }
?>
    <p>Registro de Usuarios:</p>

		<form id="form" name="insertar" action="insertar.php" method="post">
			
            <label for="nombre">Nombre:</label>
			<input id="nombre" type="text" name="nombre"><br />
            
			<label for="apaterno">Apellido paterno:</label>
			<input id="apaterno" type="text" name="apaterno"><br />
			
            <label for="amaterno">Apellido materno:</label>
			<input id="amaterno" type="text" name="amaterno"><br />
			
            <label for="correo">Correo electrónico:</label>
			<input id="correo" type="email" name="correo"><br />
			
            <button>enviar</button>

		</form>
</body>
</html>