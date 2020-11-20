<?php

    include 'Resources/Scripts/conexionBD.php';
    $abrirCon = OpenCon();

    if(isset($_POST['btnRegistrar']))
    {
        $nombre = $_POST['loginNombre'];
        $apellido = $_POST['loginApellido'];
        $correo = $_POST['loginCorreo'];
        $clave = $_POST['loginClave'];
    
        $insertarUsuario = "call InsertarUsuario('$nombre', '$apellido', '$correo', '$clave')";
        $abrirCon -> next_result();

        if ($abrirCon -> query($insertarUsuario))
        {
            echo '<script>alert("Datos actualizados con éxito.")</script>'; 
        }
        else
        {
            echo $abrirCon -> error;
        }
    }
    else if(!isset($_POST['btnRegistrar']))
    {
    }
    CloseCon($abrirCon);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'Resources/Sections/head.php';?> 
</head>
<body>
<form action="" method="post" onsubmit="return validarClave(this);">
    <div>
        <?php include 'Resources/Sections/topBar.php';?> 
    </div>
    <div>
        <?php include 'Resources/Sections/menuBar.php';?> 
    </div>
    <div class="login_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center">
                        <h2 class="login_title">Ingresar/Registrarse</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Mi Cuenta</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Ingresar-Registrarse
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="login_signup">
                            <h3 class="login_sec_title">Ingresar</h3>   
                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input type="text" autocomplete="new-password" class="sign_up_form form-control">
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" autocomplete="new-password" class="sign_up_form form-control">
                            </div>
                            <div class="login_flex">
                                <div class="login_flex1">
                                    <a href="#" class="forgot_password">¿Olvidó Contraseña?</a>
                                </div>
                                <div class="login_flex2">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-md btn-theme">Ingresar</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="login_signup">
                        <h3 class="login_sec_title">Crear Cuenta</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" autocomplete="new-password" id ="loginNombre" name ="loginNombre" class="sign_up_form form-control" required oninvalid="this.setCustomValidity('Ingrese el nombre')" 
                                        oninput="this.setCustomValidity('')" > 
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Apellido</label>
                                        <input type="text" autocomplete="new-password" id ="loginApellido" name ="loginApellido" class="sign_up_form form-control" required oninvalid="this.setCustomValidity('Ingrese el apellido')" 
                                        oninput="this.setCustomValidity('')" >
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Correo Electrónico</label>
                                        <input type="email"  autocomplete="new-password" id ="loginCorreo" name ="loginCorreo" class="sign_up_form form-control" required oninvalid="this.setCustomValidity('Ingrese un correo electrónico válido')" 
                                        oninput="this.setCustomValidity('')" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" autocomplete="new-password" id ="loginClave" name ="loginClave" class="sign_up_form form-control" required oninvalid="this.setCustomValidity('Ingrese la contraseña')" 
                                        oninput="this.setCustomValidity('')" >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Confirmar Contraseña</label>
                                        <input type="password"  autocomplete="new-password" id = "confirmarClave" class="sign_up_form form-control" required oninvalid = "this.setCustomValidity('Las contraseñas no concuerdan')" oninput="this.setCustomValidity('')" >
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="login_flex">
                                        <div class="login_flex1">
                                            <input id="news" class="checkbox-newsletter" name="news" type="checkbox">
                                            <label for="news" class="checkbox-newsletter-label">Subscribirse</label>
                                        </div>
                                        <div class="login_flex2">
                                            <div class="form-group mb-0">
                                                <input type="submit" id = "btnRegistrar" name = "btnRegistrar" class="btn btn-md btn-theme" value = "Registrarse">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer pt-1">
        <?php include('Resources/Sections/footer.php');?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
        function validarClave()
        {
            if($("#confirmarClave").val() == $("#loginClave").val())
            {
                    
                return true;
            }
            else
            {
                $("#confirmarClave")[0].setCustomValidity('Las contraseñas no concuerdan');
                return false;
            }
        }
    </script>
</form>
</body>
</html>