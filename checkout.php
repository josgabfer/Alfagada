<!DOCTYPE html>
<html lang="en">
<head>
    <title>Head</title>
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
                        <h2 class="checkout_title">Página de Información de Entrega</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container" id="accordion">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <form>
                        <h4 class="mb-3">Método de Entrega</h4>
                        <div class="table-responsive mb-3">
                            <table class="table table-bordered table-sm table-hover mb-0">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-radio">
                                            <input type="radio" name="shipping" value="1" data-toggle="collapse" href="#delivery" class="custom-control-input" id="radio1" aria-expanded="true" aria-controls="delivery">
                                                <label class="custom-control-label" for="radio1" style="color: black ">
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
                                            <input type="radio" name="shipping" value="2" data-toggle="collapse" data-parent="#accordion" href="#onsite" class="custom-control-input" id="radio2" aria-expanded="false" aria-controls="onsite">
                                                <label class="custom-control-label" for="radio2" style="color: black ">
                                                    Recoger en sitio
                                                </label>
                                            </div>
                                        </td>
                                        <td>¡Recogé en tu supermercado más cercano!</td>
                                        <td>₡1500</td>
                                    </tr>
                                </tbody>
                            </table>
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
                                <div class="a-column">
                                    <div class="address-box existing-address">
                                        <h2>Direccion Existente</h2>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="address" class="collapse in" data-parent="#accordion">
                            <h4 class="mb-3">Dirección de Entrega</h4>
                            <div class="row mb-5">
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Nombre *</label>
                                        <input class="checkout-form-control form-control" id="checkoutNombre" type="text" placeholder="Nombre" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Apellido *</label>
                                        <input class="checkout-form-control form-control" id="checkoutApellido" type="text" placeholder="Apellido" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>País *</label>
                                        <input class="checkout-form-control form-control" id="checkoutPais" type="text" placeholder="País" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Dirección *</label>
                                        <input class="checkout-form-control form-control" id="checkoutDireccion" type="text" placeholder="Dirección" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Dirección Adicional *</label>
                                        <input class="checkout-form-control form-control" id="checkoutDireccionAdicional" type="text" placeholder="Dirección Adicional" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Distrito *</label>
                                        <input class="checkout-form-control form-control" id="checkoutDistrito" type="text" placeholder="Distrito" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Cantón *</label>
                                        <input class="checkout-form-control form-control" id="checkoutCanton" type="text" placeholder="Cantón" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Provincia *</label>
                                        <input class="checkout-form-control form-control" id="checkoutProvincia" type="text" placeholder="Provincia" required>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group">
                                        <label>Código Postal *</label>
                                        <input class="checkout-form-control form-control" id="checkoutCodigoPostal" type="text" placeholder="Código Postal" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label>Número Teléfono *</label>
                                        <input class="checkout-form-control form-control" id="checkoutNumero" type="text" placeholder="Número Teléfono" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="onsite" class="collapse" data-parent="#accordion">
                            <h4 class="mb-3">Sucursales</h4>
                            <div class="table-responsive mb-3">
                                <table class="table table-bordered table-sm table-hover mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-radio">
                                                <input type="radio" name="branch"  class="custom-control-input" id="heredia1">
                                                    <label class="custom-control-label" for="heredia1" style="color: black ">
                                                        Belén, Heredia
                                                    </label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-radio">
                                                <input type="radio" name="branch" class="custom-control-input" id="rohrmoser2">
                                                    <label class="custom-control-label" for="rohrmoser2" style="color: black ">
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

        $document.ready(function() {
            $("input[name='delivery']").click(function(){
                var checkedValue = $("input[name='delivery']:checked").val();
                console.log(checkedValue);
                if(checkedValue == "1"){
                    $("#delivery").collapse('show');
                    $("#onsite").collapse('hide');
                }else if(checkedValue == "2"){
                    $("#delivery").collapse('hide');
                    $("#onsite").collapse('show');
                    $("#address").collapse('hide');
                }else{
                    console.log("Oops.");
                }
            });
        });
    </script>
</form>
</body>
</html>