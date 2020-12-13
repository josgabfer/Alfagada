<?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
     if (isset($_POST["actualizarCarrito"]))
     {
        $_SESSION["precioTotal"] = $_POST["hidden_precioProducto"];
        
        foreach($_SESSION["carrito"] as $keys => $values)
        {
            $arregloProductos = array(
                'idProducto'			=>	$values["idProducto"],
                'nombreProducto'		=>	$values["nombreProducto"],
                'precioProducto'		=>  $values["precioProducto"],
                'cantidadProducto'		=>	$_POST["cantidadProducto" . $values["idProducto"]],
                'imagenProducto'        =>  $values["imagenProducto"]
            );
            $_SESSION["carrito"][$keys] = $arregloProductos;
            $_SESSION["cantidadProducto" . $values["idProducto"]] = $_POST["cantidadProducto" . $values["idProducto"]];
            if ($_POST["hidden_totalProducto" . $values["idProducto"]] != null)
            {
                $_SESSION["totalProducto". $values["idProducto"]] = $_POST["hidden_totalProducto" . $values["idProducto"]];
            }
        }
     }
     if(isset($_GET["action"]))
     {
         if($_GET["action"] == "delete")
         {
            foreach($_SESSION["carrito"] as $keys => $values)
            {
                if($values["idProducto"] == $_GET["id"])
                {   
                    $montoBorrado = $_SESSION["totalProducto" . $values["idProducto"]];
                    unset($_SESSION["carrito"][$keys]);
                }
            }
            if (count($_SESSION["carrito"]) > 0)
            {   
                $_SESSION["precioTotal"] = $_POST["hidden_precioProducto"] - $montoBorrado ;
            } 
            else
            {
                $_SESSION["precioTotal"] = 0;
            }
        }
        header("Location:carrito.php");
    }
     if (isset($_POST["aplicarCodigo"]))
     {
        if ($_POST["hidden_codigo"] !="")
        {
            if ($_POST["hidden_codigo"] == "10")
            {
                $_SESSION["descuento"] = 0.1;
                $_SESSION["descuentoAplicado"] = 1;
            }
            else if ($_POST["hidden_codigo"] =="25")
            {
                $_SESSION["descuento"] = 0.25;
                $_SESSION["descuentoAplicado"] = 1;
            }
            else 
            {
                $_SESSION["descuento"] = 0;
                $_SESSION["descuentoAplicado"] = 0;
            }
        }
     }
     if (!isset($_SESSION["descuentoAplicado"]))
     {
        $_SESSION["descuentoAplicado"] = 0;
     }
     if (isset($_POST["removerCodigo"]))
     {
        $_SESSION["descuento"] = 0;
        $_SESSION["descuentoAplicado"] = 0;
     }
?>      
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Carrito</title>
    <?php include 'Resources/Sections/head.php';?> 
</head>
<body onload="calcularTotal()">

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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="large-font">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                    <div class="table-responsive">
                        <table class="table" id="tablaProductos">
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
                                                <img src=<?php echo 'Resources/imgs/' .   $values["imagenProducto"] . '.jpg'; ?> class="img-fluid" alt>
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
                                            <input type="hidden" class="tbl_remove" name = "removerProducto" value = "<?php echo $values["idProducto"];?>"/>
                                            
                                        </div>
                                    </td>
                                    <td>
                                        <div class="tbl_total_action">
                                        <input type="submit" class="tbl_remove" value = "X" formaction="carrito.php?action=delete&id=<?php echo $values['idProducto'];?>"/>
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
                                    <?php
                                        if ($_SESSION["descuentoAplicado"] != 1)
                                        {
                                            echo '<label class="font-size-sm font-weight-bold">Código de Cupón:</label>';
                                        }
                                        else 
                                        {
                                            echo '<label class="font-size-sm font-weight-bold">Descuento de Código Aplicado</label>';
                                        }    
                                    ?>
                                </div>
                                <div class="row form-row">
                                    <div class="col">
                                    <?php
                                        if ($_SESSION["descuentoAplicado"] != 1)
                                        {
                                        echo '<input class="form_coupon form-control" id = "codigo" name= "codigo" type="text" placeholder="Ingresar código*">';
                                        }
                                        else
                                        {
                                            echo "<button class='btn btn-md btn-dark' name = 'removerCodigo' type='submit'>Remover</button>";
                                        }
                                    ?>
                                        <input name= "hidden_codigo" id = "hidden_codigo" type="hidden" value="">
                                        <?php
                                            if (isset($_POST["hidden_codigo"]) && $_POST["hidden_codigo"] == "invalido")
                                            {
                                                echo "<p style='color: red;'>Código inválido</p>";
                                            }
                                        ?>
                                    </div>
                                    <div class="col-auto">
                                            <?php

                                            if ($_SESSION["descuentoAplicado"] != 1)
                                            {
                                                echo "<button class='btn btn-dark' name = 'aplicarCodigo' type='submit' onclick = 'aplicarDescuento()'>Aplicar</button>";
                                            }

                                            ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 col-md-auto m-full">
                            <input type="submit" hidden class="btn btn-outline-dark" id="actualizarCarrito" name="actualizarCarrito" value = "Actualizar Carrito" onclick = "calcularTotal()">
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
                                            echo number_format($_SESSION["precioTotal"]);

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
                                            $_SESSION["impuesto"] = $_SESSION["precioTotal"]*.13;
                                            echo number_format(($_SESSION["impuesto"]));

                                        } else 
                                        {
                                            echo "0";
                                        }
                                    ?>
                                    
                                    </span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>Descuento</span>
                                    <span class="ml-auto font-size-sm">¢
                                    <?php
                                        if (isset($_SESSION["precioTotal"]))
                                        {
                                            if (!isset($_SESSION["descuento"]))
                                            {
                                               $_SESSION["descuento"] = 0;
                                            }
                                            $_SESSION["montoDescuento"] = ($_SESSION["precioTotal"] +  $_SESSION["impuesto"]) * $_SESSION["descuento"];
                                            echo number_format($_SESSION["montoDescuento"]);
                                        }
                                        else 
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
                                            if ($_SESSION["descuentoAplicado"] = 1)
                                            {
                                                $_SESSION["precioFinal"] = $_SESSION["precioTotal"] +  $_SESSION["impuesto"] - $_SESSION["montoDescuento"];
                                                $_SESSION["descuentoAplicado"] = -1;   
                                                echo number_format($_SESSION["precioFinal"]);
                                            }
                                            else 
                                            {
                                                echo number_format($_SESSION["precioTotal"]);
                                            }
                                            

                                        } 
                                        else 
                                        {
                                            echo "0";
                                        }
                                    ?>
                                    </span>
                                </li>
                                <li class="list-group-item font-size-sm text-center text-gray-500">Costo de envío se calculará al proceder con la compra*</li>
                            </ul>
                        </div>
                    </div>
                    <?php
                        if(!empty($_SESSION["carrito"])){
                            echo "<a class='btn btn-block-dark mb-2' href='checkout.php'>Proceder con la Compra</a>";
                        }
                        else
                        {
                            echo " </br>";
                        }
                    ?>
                    <a class="px-0 text-body" href="producto.php">
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
        function aplicarDescuento()
        {
            var codigo = document.getElementById("codigo").value;
            if (codigo == "NAVIDAD")
            {
                document.getElementById("hidden_codigo").value = "25";
            }
            else if (codigo == "DESCUENTO10")
            {
                document.getElementById("hidden_codigo").value = "10";
            }
            else
            {
                document.getElementById("hidden_codigo").value = "invalido";
            }
        }
        function removerDescuento()
        {
            document.getElementById("hidden_codigo").value = "0";
        }    
    </script>
</form>
</body>
</html>