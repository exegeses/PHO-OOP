<?php
    require 'config/config.php';
    include 'includes/over-all-header.html';
    include 'includes/nav.php';
?>

        <main class="container">
            <h1>Formulario de ingreso</h1>

            <div class="alert bg-light border border-secondary col-8 mx-auto round p-4">
                <form action="login.php" method="post">
                    Nombre: <br>
                    <input type="text" name="usuEmail" class="form-control">
                    <br>
                    Contraseña: <br>
                    <input type="password" name="usuClave"  class="form-control">
                    <button class="btn btn-dark btn-block">Ingresar</button>
                </form>
                
            </div>
<?php
        if( isset($_GET['error']) ){
?>
            <script>
                Swal.fire(
                    'Advertencia',
                    'Nombre de usuairo y/o clave incorrectos',
                    'error'
                );
            </script>
<?php
        }
?>

        </main>

<?php
    include 'includes/footer.php';
?>