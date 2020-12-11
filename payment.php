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
                        <h2 class="checkout_title">Página De Pago</h2>
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
                        <h4 class="mb-3">Método de Pago</h4>
                        <div class="list-group list-group-sm mb-5">
                            <div class="list-group-item" >
                                <div class="custom-control custom-radio">
                                    <input type="radio" name="pago" value="1" data-toggle="collapse" href="#cc" class="custom-control-input" id="cc" aria-expanded="true" aria-controls="cc">
                                        <label class="custom-control-label" for="cc">
                                            Tarjeta de Crédito
                                            <img class="ml-2" src="Resources/imgs/cc.png" alt="...">
                                        </label>
                                </div>
                            </div>
                            <div id="cc" class="collapse" data-parent="#accordion">
                                <div class="list-group-item py-0">
                                    <div class="form-row py-5">
                                        <div class="col-12">
                                            <div class="form-group mb-4">
                                                <label class="bold-simple">NUMERO DE TARJETA</label>
                                                <input class="payment-form-control" type="text" placeholder="Número de Tarjeta*" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-4">
                                                <label class="bold-simple">NOMBRE DE TARJETAHABIENTE</label>
                                                <input class="payment-form-control" type="text" placeholder="Nombre de Tarjetahabiente*" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group mb-md-0">
                                                <label class="bold-simple">Mes</label>
                                                <select class="payment-form-control custom-select">
                                                    <option>Enero</option>
                                                    <option>Febrero</option>
                                                    <option>Marzo</option>
                                                    <option>Abril</option>
                                                    <option>Mayo</option>
                                                    <option>Junio</option>
                                                    <option>Julio</option>
                                                    <option>Agosto</option>
                                                    <option>Septiembre</option>
                                                    <option>Octubre</option>
                                                    <option>Noviembre</option>
                                                    <option>Diciembre</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group mb-md-0">
                                                <label class="bold-simple">Año</label>
                                                <select class="payment-form-control custom-select">
                                                    <option>2021</option>
                                                    <option>2022</option>
                                                    <option>2023</option>
                                                    <option>2024</option>
                                                    <option>2025</option>
                                                    <option>2026</option>
                                                    <option>2027</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group mb-4">
                                                <label class="bold-simple">CVV</label>
                                                <input class="payment-form-control" type="text" placeholder="CVV*" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="custom-control custom-radio">
                                    <input type="radio" name="pago" value="2" data-toggle="collapse" href="#cc" class="custom-control-input" id="efectivo" aria-expanded="true" aria-controls="efectivo">
                                        <label class="custom-control-label" for="efectivo">
                                            Efectivo
                                            <i class="fas fa-money-bill"></i>
                                        </label>
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

        $document.ready(function() {
            $("input[name='cc']").click(function(){
                var checkedValue = $("input[name='cc']:checked").val();
                console.log(checkedValue);
                if(checkedValue == "1"){
                    $("#cc").collapse('show');
                }else if(checkedValue == "2"){
                    $("#cc").collapse('hide');
                }else{
                    console.log("Oops.");
                }
            });
        });
    </script>
</form>
</body>
</html>