<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if(isset($_GET["action"]))
    {
        if($_GET["action"] == "delete")
        {
            foreach($_SESSION["carrito"] as $keys => $values)
            {
                if($values["idProducto"] == $_GET["id"])
                {
                    unset($_SESSION["carrito"][$keys]);
                }
            }
            if (count($_SESSION["carrito"]) > 0)
            {
                foreach($_SESSION["carrito"] as $keys => $values)
                {  
                    $total = 0;
                    $total = $total + ($values["cantidadProducto"] * $values["precioProducto"]);
                    $_SESSION["totalProducto". $values["idProducto"]] = $values["cantidadProducto"] * $values["precioProducto"];
                    $_SESSION["precioTotal"] = $total;
                }
                          
            } else 
            {
                $_SESSION["precioTotal"] = 0; 
            }   
        
        }
        echo "<script>refrescarPrecio=true</script>";
     }
     if (isset($_POST["actualizarCarrito"]))
     {
        $_SESSION["precioTotal"] = $_POST["hidden_precioProducto"];
        foreach($_SESSION["carrito"] as $keys => $values)
        {
            $_SESSION["cantidadProducto" . $values["idProducto"]] = $_POST["cantidadProducto" . $values["idProducto"]];
            if ($_POST["hidden_totalProducto" . $values["idProducto"]] != null)
            {
                $_SESSION["totalProducto". $values["idProducto"]] = $_POST["hidden_totalProducto" . $values["idProducto"]];
            }
        }
     }
?>      
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrito</title>
    <?php include 'Resources/Sections/head.php';?> 
</head>
<body>

<form action="" method="post">
    <div  id = "topBar">
        <?php include 'Resources/Sections/topBar.php';?> 
    </div>
    <div>
        <?php include 'Resources/Sections/menuBar.php';?> 
    </div>
    <div class="cart_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-center">
                        <h2 class="cart_title">Carrito de Compras</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Tienda</a>                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Carrito de Compras
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
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody> 
                                <?php
                                    
                                    if(!empty($_SESSION["carrito"]))
                                    {
                                        foreach($_SESSION["carrito"] as $keys => $values)
                                    {
                                ?>
                                <tr>
                                    <td>
                                        <div class="tbl_cart_product">
                                            <div class="tbl_cart_product_thumb">
                                                <img src="Resources/imgs/malibu.png" class="img-fluid" alt>
                                            </div>
                                            <div class="tbl_cart_product_caption">
                                                <h5 class="tbl_product_title"><?php echo $values["nombreProducto"]; ?></h5>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        <h4 class="tbl_price" id="precioProducto<?php echo $values["idProducto"];?>" name="precioProducto<?php echo $values["idProducto"];?>">¢<?php echo $values["precioProducto"];?></h4>
                                    </td>
                                    <td>
                                        <input type="number" class="tbl_quantity form-control" id="cantidadProducto<?php echo $values['idProducto'];?>" name="cantidadProducto<?php echo $values['idProducto'];?>" 
                                        value="<?php echo  $_SESSION["cantidadProducto" . $values["idProducto"]];?>" onblur=calcularPrecio(<?php echo $values["idProducto"];?>);>
                                    </td>
                                    <td>
                                        <div class="tbl_total_action">
                                            <h4 class="tbl_total total_precio" id="totalProducto<?php echo $values["idProducto"];?>">¢<?php echo $_SESSION["totalProducto" . $values['idProducto']];?></h4>
                                            <input type="hidden" id="hidden_totalProducto<?php echo $values["idProducto"];?>" name="hidden_totalProducto<?php echo $values["idProducto"];?>" value ="">
                                            <a href="carrito.php?action=delete&id=<?php echo $values['idProducto'];?>" class="tbl_remove">
                                                <i class="ti-close"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    }
                                }
                                ?>
                                <input type="hidden" id ="hidden_precioProducto" name = "hidden_precioProducto" value ="">
                            </tbody>
                        </table>
                    </div>
                    <div class="row align-items-end justify-content-between mb-10 mb-md-0">
                        <div class="col-12 col-md-7">
                            <form class="mb-7 mb-md-0">
                                <div class="col">
                                    <label class="font-size-sm font-weight-bold">Código de Cupón:</label>
                                </div>
                                <div class="row form-row">
                                    <div class="col">
                                        <input class="form_coupon form-control" type="text" placeholder="Ingresar código*">
                                    </div>
                                    <div class="col-auto">
                                        <button class="btn btn-md btn-dark" type="submit">Aplicar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-md-auto m-full">
                            <input type="submit" hidden class="btn btn-md btn-outline-dark" id="actualizarCarrito" name="actualizarCarrito" value = "Actualizar Carrito" onclick = "calcularTotal()">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="cart_details">
                        <div class="cart body">
                            <ul class="list-group list-group-sm list-group-flush-y list-group-flush-x">
                                <li class="list-group-item d-flex">
                                    <h5 class="mb-0">Resumen del Pedido</h5>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>Subtotal</span>
                                    <span class="ml-auto font-size-sm"> ¢
                                    <?php
                                        if (isset($_SESSION["precioTotal"]))
                                        {
                                            echo number_format($_SESSION["precioTotal"] - ($_SESSION["precioTotal"]*.13));

                                        } else 
                                        {
                                            echo "0";
                                        }
                                    ?>
                                    </span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>Impuestos</span>
                                    <span class="ml-auto font-size-sm">¢
                                    <?php
                                        if (isset($_SESSION["precioTotal"]))
                                        {
                                            echo number_format(($_SESSION["precioTotal"]*.13));

                                        } else 
                                        {
                                            echo "0";
                                        }
                                    ?>
                                    
                                    </span>
                                </li>
                                <li class="list-group-item d-flex font-size-lg font-weight-bold">   
                                    <span>Total</span>
                                    <span class="ml-auto font-size-sm">¢
                                    <?php
                                        if (isset($_SESSION["precioTotal"]))
                                        {
                                            echo number_format($_SESSION["precioTotal"]);

                                        } else 
                                        {
                                            echo "0";
                                        }
                                    ?>
                                    </span>
                                </li>
                                <li class="list-group-item font-size-sm text-center text-gray-500">Costo de envio se calculará al concluir el pago*</li>
                            </ul>
                        </div>
                    </div>
                    <a class="btn btn-block-dark mb-2" href="#">Continuar con el Pago</a>
                    <a class="px-0 text-body" href="#">
                        <i class="ti-back-left mr-2"></i>
                        Continuar comprando
                    </a>
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
        function calcularPrecio(id)
        {
            var cantidadServidor = document.getElementById("cantidadProducto" + id).defaultValue;
            var precioProducto = document.getElementById("precioProducto" + id).innerText;
            precioProducto = precioProducto.slice(1);
            var totalProducto = parseFloat(document.getElementById("cantidadProducto" + id).value) * parseFloat(precioProducto);
            document.getElementById("totalProducto" + id).innerText = "¢" + totalProducto;
            document.getElementById("hidden_totalProducto" + id).value = totalProducto;
            if (cantidadServidor != document.getElementById("cantidadProducto" + id).value)
            {
                
                document.getElementById("actualizarCarrito").removeAttribute("hidden");
            }
            else 
            {
                document.getElementById("actualizarCarrito").setAttribute("hidden", true);
            }
            
        }
        function calcularTotal()
        {
            var precio_unitario = document.getElementsByClassName("total_precio");
            var precioTotal = 0;
            for(var i=0; i<precio_unitario.length; i++)
            {
                var x = precio_unitario[i].innerHTML;
                x = x.slice(1);
                precioTotal += parseFloat(x);
            }
            document.getElementById("hidden_precioProducto").value = precioTotal;
        }

    </script>
</form>
</body>
</html>