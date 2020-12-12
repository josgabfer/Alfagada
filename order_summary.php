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
                        <h2 class="checkout_title">Resumén de Orden</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="large-font" style="background: #f4f5f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card-body bg-white mb-4">
                        <div class="row">
                            <div class="col-12 col-lg-3">
                                <h6 class="text-muted mb-1">Número de Orden:</h6>
                                <p class="mb-lg-0 font-size-sm font-weight-bold" style="color: #2E3D59">5817845</p>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h6 class="text-muted mb-1">Fecha de Envío:</h6>
                                <p class="mb-lg-0 font-size-sm font-weight-bold" style="color: #2E3D59">17/12/2020</p>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h6 class="text-muted mb-1">Estado:</h6>
                                <p class="mb-lg-0 font-size-sm font-weight-bold" style="color: #2E3D59">Entregado</p>
                            </div>
                            <div class="col-12 col-lg-3">
                                <h6 class="text-muted mb-1">Total de Orden:</h6>
                                <p class="mb-lg-0 font-size-sm font-weight-bold" style="color: #2E3D59">₡21,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="card style-2 mb-4">
                        <div class="card-header">

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