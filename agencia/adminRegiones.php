<?php
    require 'config/config.php';
    require 'clases/Conexion.php';
    require 'clases/Region.php';
    $Region = new Region;
    $regiones = $Region->listarRegiones();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main class="container">

            <h1>Panel de administración de regiones</h1>

            <table class="table table-hover table-striped border-0">
                <thead class="thead-white">
                <tr>
                    <th>#</th>
                    <th>Región</th>
                    <th colspan="2">
                        <a href="" class="btn btn-outline-secondary">
                            Agregar
                        </a>
                    </th>
                </tr>
                </thead>
                <tbody>
<?php
            foreach ( $regiones as $region ){
?>
                <tr>
                    <td><?= $region['regID'] ?></td>
                    <td><?= $region['regNombre'] ?></td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
<?php
    }
?>                
                </tbody>

            </table>


        </main>

<?php
    include 'includes/footer.php';
?>