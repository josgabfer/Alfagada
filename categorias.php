<!DOCTYPE html>
<html lang="en">
<head>
    <title>Productos</title>
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
                        <h2 class="checkout_title">Categorías</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Tienda
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section style="background: #f4f5f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-6">
                            <div class="categories_item">
                                <div class="categories_item_thumb">
                                    <div class="categories_overlay">
                                        <img src="Resources/imgs/abarrotes_cat.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="categories_caption">
                                    <div class="categories_bottom_caption">
                                        <div class="categories_title">
                                            Abarrotes
                                        </div>
                                    </div>
                                    <a href="abarrotes.php" class="btn categories_btn">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="categories_item">
                                <div class="categories_item_thumb">
                                    <div class="categories_overlay">
                                        <img src="Resources/imgs/bebidas_cat.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="categories_caption">
                                    <div class="categories_bottom_caption">
                                        <div class="categories_title">
                                            Bebidas
                                        </div>
                                    </div>
                                    <a href="producto.php" class="btn categories_btn">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <div class="categories_item">
                                <div class="categories_item_thumb">
                                    <div class="categories_overlay">
                                        <img src="Resources/imgs/meat_cat.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="categories_caption">
                                    <div class="categories_bottom_caption">
                                        <div class="categories_title">
                                            Carnes
                                        </div>
                                    </div>
                                    <a href="producto.php" class="btn categories_btn">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="categories_item">
                                <div class="categories_item_thumb">
                                    <div class="categories_overlay">
                                        <img src="Resources/imgs/clean_cat.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="categories_caption">
                                    <div class="categories_bottom_caption">
                                        <div class="categories_title">
                                            Limpieza
                                        </div>
                                    </div>
                                    <a href="producto.php" class="btn categories_btn">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <div class="categories_item">
                                <div class="categories_item_thumb">
                                    <div class="categories_overlay">
                                        <img src="Resources/imgs/fruits_cat.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="categories_caption">
                                    <div class="categories_bottom_caption">
                                        <div class="categories_title">
                                            Frutas y Vegetables
                                        </div>
                                    </div>
                                    <a href="producto.php" class="btn categories_btn">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="categories_item">
                                <div class="categories_item_thumb">
                                    <div class="categories_overlay">
                                        <img src="Resources/imgs/lacteos_cat.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="categories_caption">
                                    <div class="categories_bottom_caption">
                                        <div class="categories_title">
                                            Lacteos
                                        </div>
                                    </div>
                                    <a href="producto.php" class="btn categories_btn">Comprar</a>
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
</form>
</body>


</html>
