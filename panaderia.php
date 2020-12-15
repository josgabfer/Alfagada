<?php

    include 'Resources/Scripts/conexionBD.php';
    $consulta = "Panaderia";
    include 'Resources/Scripts/consultaProductos.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Panadería</title>
    <?php include 'Resources/Sections/head.php';?> 
</head>
<body>
    <div>
        <?php include 'Resources/Sections/topBar.php';?> 
    </div>
    <div>
        <?php include 'Resources/Sections/menuBar.php';?> 
    </div>
    <div class="min-banner img-fluid">
      <img src="Resources/imgs/panaderia.jpeg"  alt="...">
    </div>
    <div class="checkout_header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="text-center">
                        <h2 class="checkout_title">Panadería y Repostería</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="productos.php">Tienda</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Panadería y Respotería
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
        <div class="row" id="rowScroll">
         
      <?php
            if(mysqli_num_rows($listaProductos) > 0)
            {
              while($row = mysqli_fetch_array($listaProductos))
              {
                $sourceImagen = "Resources/imgs/" .   $row["imagen"] . ".jpg";
                $idProducto = $row["id"];
                $nombreProducto = $row["nombre"];
                $precioProducto = "¢" . $row["precio_unitario"];
                $descProducto = $row["descripcion"];
      ?>
           <div class="col-lg-3 col-md-4 col-sm-6">
                  <form method="post" action="panaderia.php?action=add&id=<?php echo $row["id"]; ?>">
             
                      
                              <div class="product_grid">
                                  <div class="product_thumb">
                                      <img src="<?php echo $sourceImagen;?>" alt="">
                                  </div>
                                  <br>
                                  <div class="product_caption">
                                      <div class="product_title">
                                          <h4 class="product_pro_title">
                                              <a href="#"><?php echo $nombreProducto ?></a>
                                          </h4>
                                      </div>
                                  </div>
                                  <div class="product_caption">
                                      <div class="product_description">
                                          <h5>
                                              <?php echo $descProducto ?>
                                          </h5>
                                      </div>
                                  </div>
                                  <div class="product_price">
                                      <h6>
                                          <?php echo $precioProducto ?>
                                      </h6>
                                  </div>
                                  <br/>
                                  <div class="row">
                                      <div class="col-lg-4" style="padding: 7.5px">
                                          <input type="text" name="cantidad" value="1" class="product-qty-form form-control">
                                          <input type="hidden" name="hidden_nombre<?php echo $row["id"]?>" value="<?php echo $row["nombre"];?>"/>
                                          <input type="hidden" name="hidden_precio<?php echo $row["id"]?>" value="<?php echo $row["precio_unitario"];?>" />
                                          <input type="hidden" name="hidden_imagen<?php echo $row["id"]?>" value="<?php echo $row["imagen"];?>" />
                                          <input type="hidden" name="hidden_desc<?php echo $row["id"]?>" value="<?php echo $row["descripcion"];?>" />
                                          
                                      </div>
                                      <div class="col-lg-8" style="padding: 7.5px">
                                          <input type="submit" name="anadirCarrito" class="btn product_add_btn" value="Añadir al Carrito"/>
                                      </div>
                                  </div>
                                  
                              </div>

          </form>
          </div>

   <?php
          }
        }
   ?> 
                      
              </div>
          </div>
      </div>
      <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="row">
         
      <?php
            if(mysqli_num_rows($listaProductos) > 0)
            {
              while($row = mysqli_fetch_array($listaProductos))
              {
                $sourceImagen = "Resources/imgs/" .   $row["imagen"] . ".jpg";
                $idProducto = $row["id"];
                $nombreProducto = $row["nombre"];
                $precioProducto = "¢" . $row["precio_unitario"];
                $descProducto = $row["descripcion"];
      ?>
           <div class="col-lg-3 col-md-4 col-sm-6">
                  <form method="post" action="panaderia.php?action=add&id=<?php echo $row["id"]; ?>">
             
                      
                              <div class="product_grid">
                                  <div class="product_thumb">
                                      <img src="<?php echo $sourceImagen;?>" alt="<?php echo $nombreProducto ?>" title="<?php echo $nombreProducto ?>">
                                  </div>
                                  <div class="product_caption">
                                      <div class="product_title">
                                          <h4 class="product_pro_title">
                                              <a href="#"><?php echo $nombreProducto ?></a>
                                          </h4>
                                      </div>
                                  </div>
                                  <div class="product_caption">
                                      <div class="product_description">
                                          <h5>
                                              <?php echo $descProducto ?>
                                          </h5>
                                      </div>
                                  </div>
                                  <div class="product_price">
                                      <h6>
                                          <?php echo $precioProducto ?>
                                      </h6>
                                  </div>
                                  <br/>
                                  <div class="row">
                                      <div class="col-lg-4" style="padding: 7.5px">
                                          <input type="text" name="cantidad" value="1" class="product-qty-form form-control">
                                          <input type="hidden" name="hidden_nombre<?php echo $row["id"]?>" value="<?php echo $row["nombre"];?>"/>
                                          <input type="hidden" name="hidden_precio<?php echo $row["id"]?>" value="<?php echo $row["precio_unitario"];?>" />
                                          <input type="hidden" name="hidden_imagen<?php echo $row["id"]?>" value="<?php echo $row["imagen"];?>" />
                                      </div>
                                      <div class="col-lg-8" style="padding: 7.5px">
                                          <input type="submit" name="anadirCarrito" class="btn product_add_btn" value="Añadir al Carrito"/>
                                      </div>
                                  </div>
                                  
                              </div>

          </form>
          </div>
   <?php
          }
        }
   ?> 
                      
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
    
    if (window.location.toString().indexOf("action") > -1) {
      $('html, body').animate({scrollTop: $("#rowScroll").offset().top}, 2000);
    }
    
  </script>


</body>

</html>