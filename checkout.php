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
                        <h2 class="checkout_title">Página de Pago</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
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
                                            <input type="radio" class="custom-control-input" id="radio1" name="shipping" value="option1">
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
                                            <input type="radio" class="custom-control-input" id="radio2" name="shipping" value="option1">
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
                        <h4 class="mb-3">Dirección de Entrega</h4>
                        <div class="row mb-5">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>Nombre *</label>
                                    <input class="checkout-form-control form-control" id="checkoutNombre" type="text" placeholder="Nombre" required>
                                </div>
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
    </script>
</form>
</body>
</html>