<?php
    require 'funciones.php'; // <- HELPERS
    require 'Persona.php';
    // instanciar un objeto a partir de clase Persona
    $oPersona = new Persona;

    //invocamos a setters
    $oPersona->setNombre('Ronnie');
    $oPersona->setApellido('Woods');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Vista Persona</h1>
    <?php
        mostrar($oPersona);
    ?>
    
    <div class="objeto">
<?php
    //llamamos al método verDatos()
    echo $oPersona->verDatos();
?>
    </div>
</body>
</html>
