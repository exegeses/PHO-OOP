
<header class="mb-3 py-3 bg-dark shadow-sm">

    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark ">

        <a class="navbar-brand mr-4" href="#">
            <i class="fas fa-globe-americas"></i>
            Agencia de Viajes
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="ml-4 collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-4">
                <a class="nav-item nav-link <?= activo('index') ?>" href="index.php">Inicio</a>
                <a class="nav-item nav-link <?= activo('dashboard') ?>" href="dashboard.php">Dashboard</a>
                <a class="nav-item nav-link <?= activo('adminRegiones') ?>" href="adminRegiones.php">Regiones</a>
                <a class="nav-item nav-link <?= activo('adminDestinos') ?>" href="adminDestinos.php">Destinos</a>
            </div>
        </div>

        <!-- LOGIN -->
<?php
        if( isset( $_SESSION['login'] ) ){
?>        
        <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <a href="#"><i class="fas fa-sign-out-alt"></i>
                <?= $_SESSION['usuNombre'] ?>
            </a>
        </button>
        <div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item bg-dark nav-link" href="logout.php">Salir de sistema</a>
            <a class="dropdown-item bg-dark" href="">Modificar Perfil</a>
            <a class="dropdown-item bg-dark" href="">Cambiar contraseña</a>
        </div>
<?php
        }
        else{
?>
        <button class="btn btn-dark">
            <a href="formLogin.php"><i class="fas fa-sign-in-alt mr-2"></i> Ingresar</a>
        </button>
<?php
        }
?>
    </nav>
    </div>

</header>
