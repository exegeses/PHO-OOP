<?php
    require 'funciones.php';//<- HELPERS

    $link = new PDO(
                    'mysql:host=localhost;dbname=agencia',
                    'root',
                    'root'
                );

    //creamos mensaje SQL
    $sql = "SELECT regID, regNombre
                FROM regiones";

    //preparamos el statement
    $stmt = $link->prepare($sql);
    //ejecutamos el query
    $stmt->execute();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Document</title>
</head>
<body>
    <h1>objetos PDO & PDOStatement</h1>
    <?php mostrar($link); ?>
    <?php mostrar($stmt); ?>

    <div class="objeto">
        <ul>
    <?php
        /* dos métodos para informes
            1.- método fetch()
            2.- método fetchAll()
        */
        $regiones = $stmt->fetchAll();
        foreach ( $regiones as $region ){
            echo '<li>', $region['regNombre'], '</li>';
        }
    ?>
        </ul>
    </div>

</body>
</html>