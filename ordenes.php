<?php

    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }
        

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
                        <h2 class="checkout_title">Mis Ordenes</h2>
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
                                    Mis Ordenes
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
                            <a class="list-group-item list-group-item-action dropright-toggle active"  href="ordenes.php">Mis Ordenes</a>
                            <a class="list-group-item list-group-item-action dropright-toggle" href="logout.php">Cerrar Sesión</a>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-8 col-md-9">
                    <div class="card style-2">
                        <div class="card-header">
                            <h4 class="mb-0">Mis Ordenes</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table order_history">
                                    <thead>
                                        <tr>
                                            <th scope="col">Número de Orden</th>
                                            <th scope="col">Fecha de Entrega</th>
                                            <th scope="col">Precio</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>8910563</td>
                                            <td>18 Dec 2020</td>
                                            <td>¢15000</td>
                                            <td>En Proceso</td>
                                            <td>
                                                <a href="miorden.php" class="btn btn-sm btn-order_history">Ver Orden</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8910563</td>
                                            <td>18 Dec 2020</td>
                                            <td>¢15000</td>
                                            <td>En Proceso</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-order_history">Ver Orden</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8910563</td>
                                            <td>18 Dec 2020</td>
                                            <td>¢15000</td>
                                            <td>En Proceso</td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-order_history">Ver Orden</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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