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
                                <tr>
                                    <td>
                                        <div class="tbl_cart_product">
                                            <div class="tbl_cart_product_thumb">
                                                <img src="Resources/imgs/malibu.png" class="img-fluid" alt>
                                            </div>
                                            <div class="tbl_cart_product_caption">
                                                <h5 class="tbl_product_title">Malibú 1 Litro</h5>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        <h4 class="tbl_price">$100.00</h4>
                                    </td>
                                    <td>
                                        <input type="number" class="tbl_quantity form-control" value="2">
                                    </td>
                                    <td>
                                        <div class="tbl_total_action">
                                            <h4 class="tbl_total">$200.00</h4>
                                            <a href="#" class="tbl_remove">
                                                <i class="ti-close"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tbl_cart_product">
                                            <div class="tbl_cart_product_thumb">
                                                <img src="Resources/imgs/malibu.png" class="img-fluid" alt>
                                            </div>
                                            <div class="tbl_cart_product_caption">
                                                <h5 class="tbl_product_title">Malibú 1 Litro</h5>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        <h4 class="tbl_price">$100.00</h4>
                                    </td>
                                    <td>
                                        <input type="number" class="tbl_quantity form-control" value="2">
                                    </td>
                                    <td>
                                        <div class="tbl_total_action">
                                            <h4 class="tbl_total">$200.00</h4>
                                            <a href="#" class="tbl_remove">
                                                <i class="ti-close"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tbl_cart_product">
                                            <div class="tbl_cart_product_thumb">
                                                <img src="Resources/imgs/malibu.png" class="img-fluid" alt>
                                            </div>
                                            <div class="tbl_cart_product_caption">
                                                <h5 class="tbl_product_title">Malibú 1 Litro</h5>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        <h4 class="tbl_price">$100.00</h4>
                                    </td>
                                    <td>
                                        <input type="number" class="tbl_quantity form-control" value="2">
                                    </td>
                                    <td>
                                        <div class="tbl_total_action">
                                            <h4 class="tbl_total">$200.00</h4>
                                            <a href="#" class="tbl_remove">
                                                <i class="ti-close"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="tbl_cart_product">
                                            <div class="tbl_cart_product_thumb">
                                                <img src="Resources/imgs/malibu.png" class="img-fluid" alt>
                                            </div>
                                            <div class="tbl_cart_product_caption">
                                                <h5 class="tbl_product_title">Malibú 1 Litro</h5>
                                            </div>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        <h4 class="tbl_price">$100.00</h4>
                                    </td>
                                    <td>
                                        <input type="number" class="tbl_quantity form-control" value="2">
                                    </td>
                                    <td>
                                        <div class="tbl_total_action">
                                            <h4 class="tbl_total">$200.00</h4>
                                            <a href="#" class="tbl_remove">
                                                <i class="ti-close"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
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
                            <button class="btn btn-md btn-outline-dark">Actualizar Carrito</button>
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
                                    <span class="ml-auto font-size-sm">$89.00</span>
                                </li>
                                <li class="list-group-item d-flex">
                                    <span>Impuestos</span>
                                    <span class="ml-auto font-size-sm">$0.00</span>
                                </li>
                                <li class="list-group-item d-flex font-size-lg font-weight-bold">
                                    <span>Total</span>
                                    <span class="ml-auto font-size-sm">$89.00</span>
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
    <script>
        var boton;
        var loginValido;
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