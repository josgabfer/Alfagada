<?php
//Sesion: iniciar si  es == none

    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }
        

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Resumen Compra</title>
    <?php include 'Resources/Sections/head.php';?> 
</head>
<body>

<form action="" method="post">
    <div>
        <?php include 'Resources/Sections/topBar.php';?> 
    </div>
    <div>
        <?php include 'Resources/Sections/menuBar.php';?> 
    </div>

    <div class="checkout_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-center">
                        <h2 class="checkout_title">Mi Cuenta</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Mi Cuenta
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section style="background: #eff0f0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3">
                    <nav class="dashboard-nav mb-10 mb-md-0">
                        <div class="list-group list-group-sm list-group-strong list-group-flush-x account_menu">
                            <a class="list-group-item list-group-item-action dropright-toggle active"  href="cuenta.php">Mi Cuenta</a>
                            <a class="list-group-item list-group-item-action dropright-toggle" href="#">Mi Orden</a>
                            <a class="list-group-item list-group-item-action dropright-toggle" href="#">Historial de Ordenes</a>
                            <a class="list-group-item list-group-item-action dropright-toggle" href="#">Rastreo de Orden</a>
                            <a class="list-group-item list-group-item-action dropright-toggle" href="logout.php">Cerrar Sesión</a>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-8 col-md-9">
                    <div class="card style-2">
                        <div class="card-header">
                            <h4 class=mb-0>Detalles de Cuenta</h4>
                        </div> 
                        <div class="card-body">
                            <!-- Seccion del formulario y resumen del perfil, se utilizan las variables de sesion de usuario para agregar la informacion actual del usuario -->
                            <form action="">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Nombre *</label>
                                            <input class="contact_form form-control" type="text" placeholder="Nombre *" value="<?php echo $_SESSION["NombreUsuario"] ?>" required>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Apellido *</label>
                                            <input class="contact_form form-control" type="text" placeholder="Apellido *" value="<?php echo $_SESSION["ApellidoUsuario"] ?>" required>
                                        </div>
                                    </div>  
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Correo Electrónico *</label>
                                            <input class="contact_form form-control" type="text" placeholder="Correo Electrónico *" value="<?php echo $_SESSION["correoSesion"] ?>" required>
                                        </div>
                                    </div>  
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Contraseña Actual *</label>
                                            <input class="contact_form form-control" type="text" placeholder="Contraseña Actual *" required>
                                        </div>
                                    </div> 
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label>Contraseña Nueva *</label>
                                            <input class="contact_form form-control" type="text" placeholder="Contraseña Nueva *" required>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button class="btn btn-dark" type="submit">Guardar Cambios</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="dark-footer skin-dark-footer">
      <?php include('Resources/Sections/footer.php');?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        var refrescarPrecio;
        if (refrescarPrecio ==true)
        {
        $("#topBar").load("Resources/Sections/topBar.php");
        }

    </script>
</form>
</body>
</html>