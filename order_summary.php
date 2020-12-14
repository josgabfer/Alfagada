<?php
    include 'Resources/Scripts/conexionBD.php';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $abrirCon = OpenCon();
    $idOrden = $_GET["idOrden"];
    $consultarCompra = "call ConsultarCompra($idOrden)";
    $compraRegistrada = $abrirCon -> query($consultarCompra);
    $fila = mysqli_fetch_array($compraRegistrada);
    CloseCon($abrirCon);
    $abrirCon = OpenCon();
    $correo = $_SESSION["correoSesion"];
    $consultarDireccion = "call ConsultarDireccion('$correo')";
    $direccionRegistrada = $abrirCon -> query($consultarDireccion);
    CloseCon($abrirCon);
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
                        <h2 class="checkout_title">Resumen de Compra</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Cuenta</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Resumen de Orden
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section style="background: #eff0f0; padding-top: 25px">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-12 col-sm-12">
                    <div class="confirmation-card py-3 mt-sm-3">
                        <div class="card-body text-center confirmation">
                            <h2 class="pb-2">¡Gracias por su orden!</h2>
                            <p class="font-size-sm mb-2">Su orden va a ser procesada lo antes posible.</p>
                            <p class="font-size-sm mb-2">Su número de orden es: <span class="font-weight-medium"><?php echo $_GET["idOrden"]; ?></span></p>
                            <p class="font-size-sm mb-2">Recibirá un correo electrónico con la confirmación de la orden.</p>
                            <a class="btn checkout-btn-secondary mt-3 mr-3" href="categorias.php">Seguir Comprando</a>
                            <a class="btn checkout-btn mt-3">Rastrear Orden</a>
                        </div>
                    </div>
                </div>
            </div>
            </br>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="confirmation-card">
                        <div class="card-body mb-4">
                            <div class="row">
                                <div class="col-6 col-lg-3">
                                    <h6 class="text-muted mb-1">Número de Orden:</h6>
                                    <p class="mb-lg-0 font-size-sm ch-text-bold"><?php echo $_GET["idOrden"]; ?></p>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <h6 class="text-muted mb-1">Fecha de Entrega:</h6>
                                    <p class="mb-lg-0 font-size-sm ch-text-bold"><?php echo $fila["fechaEntrega"]; ?></p>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <h6 class="text-muted mb-1">Estado:</h6>
                                    <p class="mb-lg-0 font-size-sm ch-text-bold"><?php echo $fila["estado"]; ?></p>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <h6 class="text-muted mb-1">Total de Orden:</h6>
                                    <p class="mb-lg-0 font-size-sm ch-text-bold">¢<?php echo number_format($fila["totalOrden"]) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="confirmation-card">
                        <div class="confirmation-card-header">
                            <div class="row">
                                <div class="col-6">
                                    <h4>Producto</h4>
                                </div>
                                <div class="col-2">
                                    <h4>Precio</h4>
                                </div>
                                <div class="col-2">
                                    <h4>Cantidad</h4>
                                </div>
                                <div class="col-2">
                                    <h4>Total</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                        <?php
                            foreach($_SESSION["carrito"] as $keys => $values)
                            {
                        ?>                    
                            <ul class="item-groups">
                                <li>
                                    <div class="col-2 col-md-2 col-xl-2">
                                        <a class="confirmation_product_thumb" href="#">
                                            <img src=<?php echo 'Resources/imgs/' .   $values["imagenProducto"] . '.jpg'; ?>  class="confirmation_product_thumb" alt="...">
                                        </a>
                                    </div>
                                    <div class="col-4 col-md-4 col-xl-4">
                                        <p class="font-size-sm c-product">
                                            <a href="#"><?php echo $values["nombreProducto"]; ?></a>
                                            <br>
                                            <span><?php echo $values["descProducto"];?></span>
                                        </p>
                                        <div class="font-size-sm text-muted-thin">
                                            <h5>Categoría: Abarrotes</h5>
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <h3>¢<?php echo number_format($values["precioProducto"]);?></h3>
                                    </div>
                                    <div class="col-2">
                                        <h3><?php echo $values["cantidadProducto"];?></h3>
                                    </div>
                                    <div class="col-2">
                                        <h3>¢<?php echo number_format($values["precioProducto"] * $values["cantidadProducto"]);?></h3>
                                    </div>
                                </li>
                            </ul>
                            <?php   
                            }
                            ?>  
                        </div>
                        <div class="">

                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="confirmation-card">
                                <div class="confirmation-card-header">
                                    <h4 class="mb-0">Total de Orden</h4>
                                </div>
                                <div class="card-body price-card-body">
                                    <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                        <li class="list-group-item d-flex">
                                            <span>Subtotal</span>
                                            <span class="ml-auto">¢<?php echo number_format($_SESSION["precioTotal"]); ?></span>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <span>Impuestos</span>
                                            <span class="ml-auto">¢<?php echo number_format($_SESSION["impuesto"]); ?></span>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <span>Envío</span>
                                            <span class="ml-auto">¢
                                            <?php 
                                                if ($_SESSION["tipoEntrega"] == "A domicilio")
                                                {
                                                    echo "3,000"; 
                                                }
                                                else 
                                                {
                                                    echo "1,500"; 
                                                }    ?></span>
                                        </li>
                                        <li class="list-group-item d-flex">
                                            <span>Descuento</span>
                                            <span class="ml-auto">¢<?php echo number_format($_SESSION["montoDescuento"]);?></span>
                                        </li>
                                        <li class="list-group-item d-flex font-weight-bold">
                                            <span>Total</span>
                                            <span class="ml-auto">¢<?php echo number_format($fila["totalOrden"]); ?></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
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