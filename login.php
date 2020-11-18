<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ALFAGADA</title>
    <link rel="stylesheet" href="Resources/Styles/styles.css">
    <link rel="stylesheet" href="Resources/Styles/bootstrap.css">
    <link rel="stylesheet" href="Resources/Styles/bootstrap.min.css">
    <link rel="stylesheet" href="Resources/Styles/styles_top_bar.css" media="all" type="text/css">
    <link rel="stylesheet" href="Resources/Styles/styles_menu_bar.css" media="all" type="text/css">
    <link rel="stylesheet" href="Resources/Styles/footerStyles.css">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css" type="text/css">
    <link rel="stylesheet" href="Resources/Styles/styles_login.css" media="all" type="text/css">
    
</head>
<body>

    <!-- Top Bar Section (Search)-->
    <div>
        <?php include 'Resources/Pages/topBar.php';?> 
    </div>
    <div>
        <?php include 'Resources/Pages/menuBar.php';?> 
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
                        <form>
                            <div class="form-group">
                                <label>Correo Electrónico</label>
                                <input type="text" class="sign_up_form form-control">
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="password" class="sign_up_form form-control">
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
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="login_signup">
                        <h3 class="login_sec_title">Crear Cuenta</h3>
                        <form>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Nombre</label>
                                        <input type="text" class="sign_up_form form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Apellido</label>
                                        <input type="text" class="sign_up_form form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Correo Electrónico</label>
                                        <input type="email" class="sign_up_form form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" class="sign_up_form form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <label>Confirmar Contraseña</label>
                                        <input type="password" class="sign_up_form form-control">
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
                                                <button type="submit" class="btn btn-md btn-theme">Registrase</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer pt-1">
        <?php include('Resources/Pages/footer.php');?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>