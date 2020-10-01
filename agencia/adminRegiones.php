<?php
    require 'config/config.php';
    $Region = new Region;
    $regiones = $Region->listarRegiones();
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main class="container">

            <h1>Panel de administración de regiones</h1>

            <table class="table table-borderless table-hover table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Región</th>
                    <th colspan="2">
                        <a href="formAgregarRegion.php" class="btn btn-outline-secondary">
                            <i class="fas fa-plus mr-2"></i>
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
                        <a href="formModificarRegion.php?regID=<?= $region['regID'] ?>" class="btn btn-outline-secondary">
                            <i class="fas fa-pen mr-2"></i>
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            <i class="far fa-trash-alt mr-2"></i>
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