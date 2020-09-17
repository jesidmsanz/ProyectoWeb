<?php
include 'conx.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $biografia = $_POST['biografia'];
    $sexo = $_POST['sexo'];

    if(!$nombre){
        echo '<script language="javascript">
            alert("Complete el campo Nombre");
            window.history.go(-1);
            </script>';
        
    }else if(!$apellido){
        echo '<script language="javascript">
            alert("Complete el campo Apellido");
            window.history.go(-1);
            </script>';
    }else if(!$biografia){
        echo '<script language="javascript">
        alert("Complete el campo Biografia");
        window.history.go(-1);
        </script>';
    }else{
        $registrar = "INSERT INTO registro (nombre, apellido, biografia,sexo) VALUES('$nombre', '$apellido', '$biografia','$sexo')";

        $resultado = mysqli_query($conexion,$registrar);

        if($resultado){
            echo '<script language="javascript">
            alert("Registrado exitosamente");
            window.history.go(-1);
            </script>';
        }else{
           echo 'Ocurrio un error al registrar el usuario';
        }
    };

    
    mysqli_close($conexion)

?>