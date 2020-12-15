<?php
//Inicio de sesion
    include 'Resources/Scripts/conexionBD.php';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $abrirCon = OpenCon();
    //idOrden se envia para consultarCompra
    $idOrden = $_GET["ordenId"];
    $consultarCompras = "call ConsultarCompra($idOrden, '0')";
    //consultarCompras es guardado comprasUsuario
    $comprasUsuario = $abrirCon -> query($consultarCompras);
    $row = mysqli_fetch_array($comprasUsuario);
    if ($row["tipoEntrega"] == "A domicilio")
    {
        $costoEntrega = "3000";
    }
    else
    {
        $costoEntrega = "1500";
    }
    CloseCon($abrirCon);
    $abrirCon = OpenCon();
    $consultarCarrito = "call ConsultarCarrito($idOrden)";
    $carritoCompra = $abrirCon -> query($consultarCarrito);
    CloseCon($abrirCon);
    //consulta del correo, informacion de la direccion es guardada en direccionRegistrada

    $abrirCon = OpenCon();
    $correo = $_SESSION["correoSesion"];
    $consultarDireccion = "call ConsultarDireccion('$correo')";
    $direccionRegistrada = $abrirCon -> query($consultarDireccion);
    CloseCon($abrirCon);
    
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ver Pedido</title>
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
                        <h2 class="checkout_title">Ver Pedido</h2>
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
                                    Ver Pedido
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
                            <a class="list-group-item list-group-item-action dropright-toggle active"  href="pedidos.php">Mis Pedidos</a>
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
                                    <p class="mb-lg-0 font-size-sm ch-text-bold"><?php echo $idOrden; ?></p>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <h6 class="text-muted mb-1">Fecha de Entrega:</h6>
                                    <p class="mb-lg-0 font-size-sm ch-text-bold"><?php echo $row["fechaEntrega"]; ?></p>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <h6 class="text-muted mb-1">Estado:</h6>
                                    <p class="mb-lg-0 font-size-sm ch-text-bold"><?php echo $row["estado"]; ?></p>
                                </div>
                                <div class="col-6 col-lg-3">
                                    <h6 class="text-muted mb-1">Total de Orden:</h6>
                                    <p class="mb-lg-0 font-size-sm ch-text-bold">¢<?php echo number_format($row["totalOrden"]); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card style-2 mb-4 col">
                    <div class="row">
                        <div class="card-header col-12">
                            <h4 class="mb-0">Productos</h4>
                        </div>
                        <div class="card-body">
                            <ul class="item-groups">
                            <?php
                                while($rowCarrito = mysqli_fetch_array($carritoCompra))
                                {
                                    //informacion de la variable de carritoCompra, es utilizada para la consulta de productos,
                                    //Esta informacion esguardada en rowProducto, para su visualizacion en las secciones
                                    
                                    $idProducto = $rowCarrito["idProducto"];
                                    $cantidadProducto = $rowCarrito["cantidad"];
                                    $abrirCon = OpenCon();
                                    $consultarProducto = "call ConsultarProducto($idProducto)";
                                    $productoCarrito = $abrirCon -> query($consultarProducto);
                                    CloseCon($abrirCon);
                                    while($rowProducto = mysqli_fetch_array($productoCarrito))
                                    {
                            ?>
                                <li>
                                <div class="col-12">
                                        <div class="row align-items-center">
                                            <div class="col-3 col-md-3 col-xl-3">
                                                <a class="confirmation_product_thumb" href="#">
                                                    <img src="<?php echo 'Resources/imgs/' .   $rowProducto["imagen"] . '.jpg'; ?>" class="confirmation_product_thumb" alt="">
                                                </a>
                                            </div>
                                            <div class="col-6 col-md-6 col-xl-6">
                                                <p class="font-size-sm c-product">
                                                    <a href="#"><?php echo $rowProducto["nombre"]; ?></a>
                                                    <br>
                                                    <span>¢<?php echo number_format($rowProducto["precio_unitario"]);?></span>
                                                </p>
                                                <div class="font-size-sm text-muted-thin">
                                                    <h5><?php echo $rowProducto["descripcion"];?></h5>
                                                </div>
                                                <div class="font-size-sm text-muted-thin">
                                                    <h5>Categoría: <?php echo $rowProducto["categoria"];?></h5>
                                                </div>
                                                <div class="font-size-sm text-muted-thin">
                                                    <h5>Cantidad: <?php echo $cantidadProducto; ?></h5>
                                                </div>
                                            </div>
                                            <div class="col-3"></div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                    }
                                }
                                ?>
                            </div>
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
                                        <span class="ml-auto">¢<?php echo number_format(($row["totalOrden"] + $row["descuento"] - $costoEntrega)/1.13); ?></span>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <span>Impuestos</span>
                                        <span class="ml-auto">¢<?php echo number_format(($row["totalOrden"] + $row["descuento"] - $costoEntrega)/1.13*0.13); ?></span>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <span>Descuento</span>
                                        <span class="ml-auto">¢<?php echo number_format($row["descuento"]); ?></span>
                                    </li>
                                    <li class="list-group-item d-flex">
                                        <span>Envío</span>
                                        <span class="ml-auto">¢
                                        <?php 
                                            echo number_format($costoEntrega);
                                        ?>
                                        </span>
                                    </li>
                                    <li class="list-group-item d-flex font-weight-bold">
                                        <span>Total</span>
                                        <span class="ml-auto">¢<?php echo number_format($row["totalOrden"]); ?></span>
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
                                
                                <?php
                                    if ($row["tipoEntrega"] == "A domicilio")
                                    {
                                ?>
                                
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
                                    <?php
                                        }
                                        
                                    ?>
                                    <div class="col-6 col-md-3">
                                        <p class="info_pago font-weight-bold">Tipo de Entrega:</p>
                                        <p class="info-pago">
                                            <?php echo $row["tipoEntrega"]; ?>
                                        </p>
                                        <p class="info_pago font-weight-bold">Tipo de Pago:</p>
                                        <p class="info-pago">
                                            <?php echo $row["tipoPago"]; ?>
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