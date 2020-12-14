<!DOCTYPE html>
<html lang="en">
<head>
    <title>ALFAGADA</title>
    <?php include 'Resources/Sections/head.php';?> 
</head>
<body>
  <div>
      <?php include 'Resources/Sections/topBar.php';?> 
  </div>
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
          <div class="home-sec-heading pl-2 pr-2">
            <div class="home-sec-heading-one">
              <h2>Abarrotes</h2>
            </div>
            <div class="home-sec-heading-last">
              <a href="abarrotes.php" class="btn product_add_btn">Ver Más
                <i class="ti-arrow-right ml-2"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row"> 
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="product_grid">
                <div class="product_thumb">
                    <img src="Resources/imgs/aceiteoliva.jpg" alt="">
                </div>
                <div class="product_caption">
                    <div class="product_title">
                        <h4 class="product_pro_title">
                            <a href="#">SALAT</a>
                        </h4>
                    </div>
                </div>
                <div class="product_caption">
                    <div class="product_description">
                        <h5>Aceite Oliva Virgen 500ml</h5>
                    </div>
                </div>
                <div class="product_price">
                    <h6>¢3000</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="product_grid">
                <div class="product_thumb">
                    <img src="Resources/imgs/azucar.jpg" alt="">
                </div>
                <div class="product_caption">
                    <div class="product_title">
                        <h4 class="product_pro_title">
                            <a href="#">DOÑA MARIA</a>
                        </h4>
                    </div>
                </div>
                <div class="product_caption">
                    <div class="product_description">
                        <h5>Azúcar Blanco 2kg</h5>
                    </div>
                </div>
                <div class="product_price">
                    <h6>¢1350</h6>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="product_grid">
                <div class="product_thumb">
                    <img src="Resources/imgs/frijoles_tiopelon.jpg" alt="">
                </div>
                <div class="product_caption">
                    <div class="product_title">
                        <h4 class="product_pro_title">
                            <a href="#">TIO PELON</a>
                        </h4>
                    </div>
                </div>
                <div class="product_caption">
                    <div class="product_description">
                        <h5>Frijoles Rojos 800g</h5>
                    </div>
                </div>
                <div class="product_price">
                    <h6>¢1315</h6>
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
</body>

</html>