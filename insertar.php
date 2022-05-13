<?php
require 'conexion.php';

if(isset($_POST)){
    
    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
    $apaterno = isset($_POST['apaterno']) ? htmlspecialchars($_POST['apaterno']) : '';
    $amaterno = isset($_POST['amaterno']) ? htmlspecialchars($_POST['amaterno']) : '';
    $correo = isset($_POST['correo']) ? htmlspecialchars($_POST['correo']) : '';

    if(empty($nombre) || empty($apaterno) || empty($amaterno) || empty($correo)){

		echo 'No se enviaron todos los datos requeridos (No se debería mostrar).';

	}else{

		if(!is_numeric($nombre) || !is_numeric($apaterno) || !is_numeric($amaterno) || !is_numeric($correo)){


			$query = "INSERT INTO usuario (nombre, apaterno, amaterno, correo) VALUES ('$nombre', '$apaterno', '$amaterno', '$correo')";
        	$result = pg_query($db, $query);

            if($result){

               	echo 'Registro almacenado';

            }else{

            	echo 'Error al almacenar el registro';

			}

		}else{

			echo 'Error al almacenar el registro';
		}

	}

    pg_close($con);

}
?>