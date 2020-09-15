<?php
    require 'funciones.php'; // <- HELPERS
    require 'Persona.php';
    // instanciar un objeto a partir de clase Persona
    $oPersona = new Persona;
    //llamamos al método verDatos()
    
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
    echo $oPersona->verDatos();
?>
</body>
</html>
