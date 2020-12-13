<?php
    include 'Resources/Scripts/conexionBD.php';
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    $abrirCon = OpenCon();
    $correo = $_SESSION["correoSesion"];
    $consultarDireccion = "call ConsultarDireccion('$correo')";
    $direccionRegistrada = $abrirCon -> query($consultarDireccion);
    CloseCon($abrirCon);

    if (isset($_POST["anadirDireccion"]))
    {
        $abrirCon = OpenCon();
        $correo = $_SESSION["correoSesion"];
        $direccion = $_POST["checkoutDireccion"];
        $direccionAdicional = $_POST["checkoutDireccionAdicional"];
        $pais = $_POST["checkoutPais"];
        $distrito = $_POST["checkoutDistrito"];
        $canton = $_POST["checkoutCanton"];
        $provincia = $_POST["checkoutProvincia"];
        $codPostal = $_POST["checkoutCodigoPostal"];
        $telefono = $_POST["checkoutNumero"];
        $insertarDireccion = "call InsertarDireccion('$correo', '$direccion', '$direccionAdicional', '$pais', '$provincia', '$canton', '$distrito', $codPostal, $telefono)";
        $abrirCon -> next_result();
        if($abrirCon -> query($insertarDireccion))
        {
            header('Location: checkout.php#delivery');
        }
        else
        {
            echo $abrirCon -> error;
        }
        CloseCon($abrirCon);
    }
    if (isset($_POST["continuarPago"]))
    {
        $_SESSION["precioFinal"]= $_POST["nuevoTotal"];
        header('Location: payment.php');

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Head</title>
    <?php include 'Resources/Sections/head.php';?> 
</head>
<body>

<form action="" id= "formEnvio" method="post">
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
                        <h2 class="checkout_title">Página de Información de Entrega</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Tienda</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Información de Entrega
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="large-font">
        <div class="container" id="accordion">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <form>
                        <h4 class="mb-3">Método de Entrega</h4>
                        <div class="table-responsive mb-3">
                            <table class="table table-bordered table-sm table-hover mb-0 entrega_seleccion">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-radio">
                                            <input type="radio" name="shipping" value="1" data-toggle="collapse" href="#delivery" class="custom-control-input" id="radio1" aria-expanded="true" aria-controls="delivery" onclick=sumarCargoEnvio(3000);>
                                                <label class="custom-control-label" for="radio1">
                                                    A domicilio
                                                </label>
                                            </div>
                                        </td>
                                        <td>¡Lo dejamos en la puerta de tu casa!</td>
                                        <td>₡3000</td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" name="shipping" value="2" data-toggle="collapse" data-parent="#accordion" href="#onsite" class="custom-control-input" id="radio2" aria-expanded="false" aria-controls="onsite" onclick=sumarCargoEnvio(1500)>
                                                <label class="custom-control-label" for="radio2" >
                                                    Recoger en sitio
                                                </label>
                                            </div>
                                        </td>
                                        <td>¡Recogé en tu supermercado más cercano!</td>
                                        <td>₡1500</td>
                                    </tr>
                                </tbody>
                            </table>
                            <input type="hidden" value="" name="cargoEnvio" id="cargoEnvio" />
                        </div>
                        <br>
                        <div id="delivery" class="collapse" data-parent="#accordion">
                            <div class="a-row a-spacing">
                                <div class="a-column">
                                    <div class="address-box new-address" href="#address" data-toggle="collapse">
                                        <i class="ti-plus" style="font-size: 50px; color: #C7C7C7"></i>
                                        <h2>Agregar Dirección Nueva</h2>
                                    </div>
                                </div>
                                <?php
                                    if(mysqli_num_rows($direccionRegistrada) > 0)
                                    {
                                        $fila = mysqli_fetch_array($direccionRegistrada);
                                        
                                        $direccion = $fila["direccion"];
                                        $direccionAdicional = $fila["direccion_2"];
                                        $pais = $fila["pais"];
                                        $distrito = $fila["distrito"];
                                        $canton = $fila["canton"];
                                        $provincia = $fila["provincia"];
                                        $codPostal = $fila["codigo_postal"];
                                        $telefono = $fila["telefono"];

                                        echo '<div class="a-column">
                                        <div class="address-box existing-address">
                                            <h5>'.$direccion.'</h5>
                                            <h5>'.$direccionAdicional.'</h5>
                                            <h5>'.$distrito.',&nbsp'.$canton.'</h5>
                                            <h5>'.$provincia.',&nbsp'.$codPostal.',&nbsp'.$pais.'</h5>
                                            <h5>'.$telefono.'</h5>
                                        </div>
                                    </div>';
                                    };
                                ?>
                            </div>
                        </div>
                        <div id="address" class="collapse in" data-parent="#accordion">
                            <h4 class="mb-3">Dirección de Entrega</h4>
                            <div class="row mb-5">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Dirección *</label>
                                        <input class="checkout-form-control form-control" id="checkoutDireccion" name="checkoutDireccion" type="text" placeholder="Dirección" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Dirección Adicional *</label>
                                        <input class="checkout-form-control form-control" id="checkoutDireccionAdicional" name="checkoutDireccionAdicional" type="text" placeholder="Dirección Adicional" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>País *</label>
                                        <input class="checkout-form-control form-control" id="checkoutPais" name="checkoutPais" type="text" placeholder="País" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Distrito *</label>
                                        <input class="checkout-form-control form-control" id="checkoutDistrito" name="checkoutDistrito" type="text" placeholder="Distrito" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Cantón *</label>
                                        <input class="checkout-form-control form-control" id="checkoutCanton" name="checkoutCanton" type="text" placeholder="Cantón" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Provincia *</label>
                                        <input class="checkout-form-control form-control" id="checkoutProvincia" name="checkoutProvincia" type="text" placeholder="Provincia" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Código Postal *</label>
                                        <input class="checkout-form-control form-control" id="checkoutCodigoPostal" name="checkoutCodigoPostal" type="text" placeholder="Código Postal" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Número Teléfono *</label>
                                        <input class="checkout-form-control form-control" id="checkoutNumero" name="checkoutNumero" type="text" placeholder="Número Teléfono" required>
                                    </div>
                                </div>
                                <br/>
                                <div class="col-12">
                                    <button class="btn btn-outline-dark" name="anadirDireccion" type="submit">Añadir Dirección</button>
                                </div>
                            </div>
                        </div>
                        <div id="onsite" class="collapse" data-parent="#accordion">
                            <h4 class="mb-3">Sucursales</h4>
                            <div class="table-responsive mb-3">
                                <table class="table table-bordered table-sm table-hover mb-0 entrega_seleccion">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-radio">
                                                <input type="radio" name="branch"  class="custom-control-input" id="heredia1">
                                                    <label class="custom-control-label" for="heredia1">
                                                        Belén, Heredia
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-radio">
                                                <input type="radio" name="branch" class="custom-control-input" id="rohrmoser2">
                                                    <label class="custom-control-label" for="rohrmoser2">
                                                        Rohrmoser, San José
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="cart_details mb-4">
                        <div class="card-body">
                            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                <li class="list-group-item d-flex">
                                    <h5 class="mb-0 order_sum">Resumen del Pedido</h5>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span class="order_sum_light">Subtotal</span>
                                    <span class="ml-auto order_sum_light"> ¢
                                    <?php
                                        echo number_format($_SESSION["precioTotal"]);
                                    ?>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span class="order_sum_light">Impuestos</span>
                                    <span class="ml-auto order_sum_light">¢
                                    <?php
                                        echo number_format($_SESSION["impuesto"]);
                                    ?>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span class="order_sum_light">Descuento</span>
                                    <span class="ml-auto order_sum_light">¢
                                    <?php
                                        echo number_format($_SESSION["montoDescuento"]);
                                    ?>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span class="order_sum_light">Envío</span>
                                    <span class="ml-auto order_sum_light" id="envioResumen">¢ 0</span>
                                </li>
                                <br>
                                <form action="" method="post">
                                <li class="list-group-item d-flex font-size-lg ">   
                                    <span class="order_sum_light font-weight-bold">Total</span>
                                    <span class="ml-auto order_sum_light font-weight-bold" id="totalResumen">¢
                                    <?php
                                         echo number_format($_SESSION["precioFinal"]);
                                    ?>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input type=hidden id ="nuevoTotal" name="nuevoTotal" value="" />
                    <button class='btn btn-block-dark mb-2' type='submit' name='continuarPago' >Continuar con el Pago</button>
                </div>
                </form>
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
        var hash = window.location.hash;
        if (hash) {
            var requestedPanel = $(hash);
            if (requestedPanel.length) {
                $("#radio1").attr('checked', true); 
                $(hash).show();
                $('html, body').animate({scrollTop: $("#formEnvio").offset().top}, 2000);
            }
        }
        $(hash).click(function(){
            $(hash).hide();
        });

        function sumarCargoEnvio(x)
        {
  
            var valorEnvio = x.toLocaleString(undefined, { minimumFractionDigits: 0 });
            document.getElementById("envioResumen").innerHTML = "¢ " + valorEnvio;
            <?php
                
                echo 'document.getElementById("totalResumen").innerHTML = "'.number_format($_SESSION["precioFinal"]). '";';
                        
            ?>
            var totalEnvio = (parseFloat(document.getElementById("totalResumen").innerHTML.replace(",","")) + x);

            totalEnvio = totalEnvio.toLocaleString(undefined, { minimumFractionDigits: 0 });
            document.getElementById("totalResumen").innerHTML = "¢" + totalEnvio;
            document.getElementById("nuevoTotal").value = totalEnvio.replace(",","");
        }
     
        /* $("input[name='delivery']").click(function(){
           console.log("HAA");
           var checkedValue = $("input[name='delivery']:checked").val();
            console.log(checkedValue);
            if(checkedValue == "1"){
                $("#delivery").collapse('show');
                $("#onsite").collapse('hide');
                $("#cargoEnvio").val() = "3000";
            }else if(checkedValue == "2"){
                $("#delivery").collapse('hide');
                $("#onsite").collapse('show');
                $("#address").collapse('hide');
                $("#cargoEnvio").val() = "1500";
            }else{
                console.log("Oops.");
           
        }); }*/ 
    

    </script>
</form>
</body>
</html>