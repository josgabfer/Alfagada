<!DOCTYPE html>
<html lang="en">
<head>
    <title>ALFAGADA</title>
    <?php include 'Resources/Sections/head.php';?> 
</head>
<body>
  <form action="" method="post">
  <div>
      <?php include 'Resources/Sections/topBar.php';?> 
  </div>
  </form>
  <div>
      <?php include 'Resources/Sections/menuBar.php';?> 
  </div>


  <div id="slide" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#" data-slide-to="0" class="active"></li>
      <li data-target="#" data-slide-to="1"></li>
      <li data-target="#" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="Resources/imgs/delivery.jpg" alt="banner">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Resources/imgs/black_friday.jpeg" alt="banner">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="Resources/imgs/christmas.jpg" alt="banner">
      </div>
    </div>
    <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#slide" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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
                                    <a href="bebidas.php" class="btn categories_btn">Comprar</a>
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
                                    <a href="carnes.php" class="btn categories_btn">Comprar</a>
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
                                    <a href="limpieza.php" class="btn categories_btn">Comprar</a>
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
                                            Frutas y Verduras
                                        </div>
                                    </div>
                                    <a href="frutas_verduras.php" class="btn categories_btn">Comprar</a>
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
                                    <a href="lacteos.php" class="btn categories_btn">Comprar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="categories_item">
                                <div class="categories_item_thumb">
                                    <div class="categories_overlay">
                                        <img src="Resources/imgs/panaderia_cat.jpeg" alt="">
                                    </div>
                                </div>
                                <div class="categories_caption">
                                    <div class="categories_bottom_caption">
                                        <div class="categories_title">
                                            Panadería y Repostería
                                        </div>
                                    </div>
                                    <a href="panaderia.php" class="btn categories_btn">Comprar</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3"></div>
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
</body>

</html>
