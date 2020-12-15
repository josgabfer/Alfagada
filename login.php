<?php

    include 'Resources/Scripts/conexionBD.php';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }

    if(isset($_POST['btnRegistrar']))
    {
        $abrirCon = OpenCon();
        $nombre = $_POST['regNombre'];
        $apellido = $_POST['regApellido'];
        $correo = $_POST['regCorreo'];
        $clave = $_POST['regClave'];
    
        $insertarUsuario = "call InsertarUsuario('$nombre', '$apellido', '$correo', '$clave')";
        $abrirCon -> next_result();

        if($abrirCon -> query($insertarUsuario))
        {
            echo "<script> registroExitoso=true </script>";
        }
        else
        {
            echo "<script> registroExitoso=false </script>";
        }
    }

    if(isset($_POST['btnIngresar']))
    {
        $abrirCon = OpenCon();
        $correo = $_POST['loginCorreo'];
        $clave = $_POST['loginClave'];
        $consultarUsuario = "call ConsultarUsuario('$correo', '$clave')";
        $listaUsuarios = $abrirCon -> query($consultarUsuario);
        $row = mysqli_fetch_array($listaUsuarios);
        if(empty($row))
        {
          echo "<script> loginInvalido=true </script>";
        }
        else 
        {
            $_SESSION["NombreUsuario"] = $row["nombre"];
            $_SESSION["ApellidoUsuario"] = $row["apellido"];
            $_SESSION["correoSesion"] = $correo;
            $_SESSION["claveSesion"] = $clave;
            header('Location: index.php');

        }
        CloseCon($abrirCon);
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ingresar/Registrarse</title>
    <?php include 'Resources/Sections/head.php';?> 
</head>
<body>
<form action="" method="post" onsubmit="return validarForm(this);">
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
                                    <a href="index.php">
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
    <div class="modal fade" id="registroExitoso" >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registro Exitoso</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Registro completado correctamente. 
                <br>
                    Por favor ingrese con los nuevos credenciales.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-modal-close"  data-dismiss="modal">Cerrar</button>
                </div>
    
            </div>
        </div>
    </div>
    <div class="modal fade" id="errorRegistro" >
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Correo Ya Registrado</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    El correo eléctronico ya existe en el sistema.
                <br>
                    Por favor utilice otra dirección de correo.
                </div>
                <div class="modal-footer">
                    <button class="btn btn-modal-close"  data-dismiss="modal">Cerrar</button>
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
                            <p hidden id = "errorLogin" style="color: red;">La combinación de correo/contraseña es incorrecta. Por favor revisar los datos e intentar nuevamente.</p>
                            </br>
                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input type="text" id="loginCorreo" name="loginCorreo" autocomplete="new-password" class="sign_up_form form-control" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" id="loginClave" name="loginClave" autocomplete="new-password" class="sign_up_form form-control" oninput="this.setCustomValidity('')">
                            </div>
                            <div class="login_flex">
                                <div class="login_flex1">
                                    <a href="#" class="forgot_password">¿Olvidó Contraseña?</a>
                                </div>
                                <div class="login_flex2">
                                    <div class="form-group mb-0">
                                        <button type="submit" name="btnIngresar" id="btnIngresar" class="btn btn-md btn-theme" onclick="validarIngreso()">Ingresar</button>
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
                                    <input type="text" autocomplete="new-password" id ="regNombre" name ="regNombre" class="sign_up_form form-control" oninput="this.setCustomValidity('')">                                          
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Apellido</label>
                                    <input type="text" autocomplete="new-password" id ="regApellido" name ="regApellido" class="sign_up_form form-control" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Correo Electrónico</label>
                                    <input type="text"  autocomplete="new-password" id ="regCorreo" name ="regCorreo" class="sign_up_form form-control" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Contraseña</label>
                                    <input type="password" autocomplete="new-password" id ="regClave" name ="regClave" class="sign_up_form form-control" oninput="this.setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Confirmar Contraseña</label>
                                    <input type="password"  autocomplete="new-password" id = "confirmarClave" class="sign_up_form form-control" oninput="this.setCustomValidity('')">
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
                                            <button class="btn btn-md btn-theme" name= "btnRegistrar" onclick="validarRegistro()" data-toggle="modal" data-target="#registroExitoso">Registrarse</button>
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
    
    <footer class="dark-footer skin-dark-footer">
      <?php include('Resources/Sections/footer.php');?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>

        var boton;
        var registroExitoso;
        var loginInvalido;
        if(registroExitoso==true)
        {
            $("#registroExitoso").modal('show');
        }
        else if(registroExitoso==false)
        {
            $("#errorRegistro").modal('show');
        }
        if(loginInvalido==true)
        {
            document.getElementById('errorLogin').removeAttribute("hidden");
        }
        function validarRegistro()
        {  
            if($("#regNombre").val() == "")
            {
                $("#regNombre")[0].setCustomValidity('Ingrese el nombre');
            }
            else if($("#regApellido").val() == "")
            {
                $("#regApellido")[0].setCustomValidity('Ingrese el apellido');
            }
            else if($("#regCorreo").val() == "")
            {
                $("#regCorreo")[0].setCustomValidity('Ingrese un correo electrónico válido');
            }
            else if($("#regClave").val() == "")
            {
                $("#regClave")[0].setCustomValidity('Ingrese la contraseña');
            }
            else if($("#confirmarClave").val() != $("#regClave").val())
            {
                $("#confirmarClave")[0].setCustomValidity('Las contraseñas no concuerdan');
            }
            else
            {
                boton = true;
            }
        }
        function validarIngreso()
        {
            if($("#loginCorreo").val() == "")
            {
                $("#loginCorreo")[0].setCustomValidity('Ingrese un correo electrónico válido');
            }
            else if($("#loginClave").val() == "")
            {
                $("#loginClave")[0].setCustomValidity('Ingrese la contraseña');
            }
            else
            {
                boton = true;
            }
            
        }    

        function validarForm()
        {   
            if(boton != true)
            {
                return false;
            }
            return true;
        }

    </script>
</form>
</body>
</html>