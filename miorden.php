<?php

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
                        <h2 class="checkout_title">Mis Ordenes</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="cuenta.php">Mi Cuenta</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Mis Ordenes
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
                            <a class="list-group-item list-group-item-action dropright-toggle"  href="cuenta.php">Mi Cuenta</a>
                            <a class="list-group-item list-group-item-action dropright-toggle active"  href="ordenes.php">Mis Ordenes</a>
                            <a class="list-group-item list-group-item-action dropright-toggle" href="#">Rastreo de Orden</a>
                            <a class="list-group-item list-group-item-action dropright-toggle" href="logout.php">Cerrar Sesión</a>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-8 col-md-9">
                    <div class="confirmation-card">
                        <div class="card-body mb-4">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <h6 class="text-muted mb-1">Número de Orden:</h6>
                                    <p class="mb-lg-0 font-size-sm ch-text-bold">1234564</p>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <h6 class="text-muted mb-1">Fecha de Entrega:</h6>
                                    <p class="mb-lg-0 font-size-sm ch-text-bold">12/12/12</p>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <h6 class="text-muted mb-1">Estado:</h6>
                                    <p class="mb-lg-0 font-size-sm ch-text-bold">En proceso</p>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <h6 class="text-muted mb-1">Total de Orden:</h6>
                                    <p class="mb-lg-0 font-size-sm ch-text-bold">¢15000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card style-2 mb-4">
                        <div class="card-header">
                            <h4 class="mb-0">Productos</h4>
                        </div>
                        <div class="card-body">
                            <ul class="item-groups">
                                <li>
                                    <div class="row align-items-center">
                                        <div class="col-4 col-md-4 col-xl-4">
                                            <a class="confirmation_product_thumb" href="#">
                                                <img src="Resources/imgs/vanish.jpg"  class="confirmation_product_thumb" alt="">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-8 col-xl-">
                                            <p class="font-size-sm c-product">
                                                <a href="#">Vanish</a>
                                                <br>
                                                <span>¢2685</span>
                                            </p>
                                            <div class="font-size-sm text-muted-thin">
                                                <h5>Quitamanchas Polvo Color 450g</h5>
                                            </div>
                                            <div class="font-size-sm text-muted-thin">
                                                <h5>Categoría: Limpieza</h5>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row align-items-center">
                                        <div class="col-4 col-md-4 col-xl-4">
                                            <a class="confirmation_product_thumb" href="#">
                                                <img src="Resources/imgs/vanish.jpg"  class="confirmation_product_thumb" alt="">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-8 col-xl-">
                                            <p class="font-size-sm c-product">
                                                <a href="#">Vanish</a>
                                                <br>
                                                <span>¢2685</span>
                                            </p>
                                            <div class="font-size-sm text-muted-thin">
                                                <h5>Quitamanchas Polvo Color 450g</h5>
                                            </div>
                                            <div class="font-size-sm text-muted-thin">
                                                <h5>Categoría: Limpieza</h5>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="row align-items-center">
                                        <div class="col-4 col-md-4 col-xl-4">
                                            <a class="confirmation_product_thumb" href="#">
                                                <img src="Resources/imgs/vanish.jpg"  class="confirmation_product_thumb" alt="">
                                            </a>
                                        </div>
                                        <div class="col-8 col-md-8 col-xl-">
                                            <p class="font-size-sm c-product">
                                                <a href="#">Vanish</a>
                                                <br>
                                                <span>¢2685</span>
                                            </p>
                                            <div class="font-size-sm text-muted-thin">
                                                <h5>Quitamanchas Polvo Color 450g</h5>
                                            </div>
                                            <div class="font-size-sm text-muted-thin">
                                                <h5>Categoría: Limpieza</h5>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card style-2 mb-4">
                        <div class="confirmation-card">
                            <div class="confirmation-card-header">
                                <h4 class="mb-0">Total de Orden</h4>
                            </div>
                            <div class="card-body price-card-body">
                                <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                    <li class="list-group-item d-flex">
                                        <span>Subtotal</span>
                                        <span class="ml-auto">¢15000</span>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <span>Impuestos</span>
                                        <span class="ml-auto">¢300</span>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <span>Envío</span>
                                        <span class="ml-auto">¢1500</span>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <span>Descuento</span>
                                        <span class="ml-auto">¢150</span>
                                    </li>
                                    <li class="list-group-item d-flex font-weight-bold">
                                        <span>Total</span>
                                        <span class="ml-auto">¢16950</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                    <div class="card style-2 mb-4">
                        <div class="confirmation-card">
                            <div class="confirmation-card-header">
                                <h4 class="mb-0">Información de Envío y Pago</h4>
                            </div>
                            <div class="card-body price-card-body">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <p class="info_pago font-weight-bold">Dirección de Entrega:</p>
                                        <p class="info-pago">
                                        <?php
                                            
                                            if(mysqli_num_rows($direccionRegistrada) > 0)
                                            {
                                                $filaDireccion = mysqli_fetch_array($direccionRegistrada);
                                                
                                                $direccion = $filaDireccion["direccion"];
                                                $direccionAdicional = $filaDireccion["direccion_2"];
                                                $pais = $filaDireccion["pais"];
                                                $distrito = $filaDireccion["distrito"];
                                                $canton = $filaDireccion["canton"];
                                                $provincia = $filaDireccion["provincia"];
                                                $codPostal = $filaDireccion["codigo_postal"];
                                                $telefono = $filaDireccion["telefono"];

                                                echo $direccion.'<br>'.$direccionAdicional.'<br>'.$distrito.',&nbsp'.$canton.'<br>'.$provincia.',&nbsp'.$codPostal.',&nbsp'.$pais.'<br>'.$telefono;
                                            };
                                        ?>
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p class="info_pago font-weight-bold">Tipo de Entrega:</p>
                                        <p class="info-pago">
                                            <?php echo $fila["tipoEntrega"]; ?>
                                        </p>
                                        <p class="info_pago font-weight-bold">Tipo de Pago:</p>
                                        <p class="info-pago">
                                            <?php echo $fila["tipoPago"]; ?>
                                        </p>
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