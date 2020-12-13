<?php

    include 'Resources/Scripts/conexionBD.php';
    if (session_status() == PHP_SESSION_NONE) {
      session_start();
    }

    $abrirCon = OpenCon();

    $consultarProducto = "call ConsultarProducto()";
    $abrirCon -> next_result();
    $listaProductos = $abrirCon -> query($consultarProducto);
    if (!isset($total))
    {
      $total = 0;
    }
    
    if(isset($_POST["anadirCarrito"]))
    {      
      if(isset($_SESSION["carrito"]))
      {
        
        $arregloProductosId = array_column($_SESSION["carrito"], "idProducto");
        if(!in_array($_GET["id"], $arregloProductosId))
        {
          $contador = count($_SESSION["carrito"]);
          $arregloProductos = array(
            'idProducto'			=>	$_GET["id"],
            'nombreProducto'			=>	$_POST["hidden_nombre" . $_GET["id"]],
            'precioProducto'		=>	$_POST["hidden_precio" . $_GET["id"]],
            'cantidadProducto'		=>	$_POST["cantidad"],
            'imagenProducto'    =>  $_POST["hidden_imagen" . $_GET["id"]]
          );
          $_SESSION["carrito"][$contador] = $arregloProductos;
        }
        else
        {
          echo '<script>alert("Ya existe")</script>';
        }
      }
      else
      {
        $arregloProductos = array(
          'idProducto'			=>	$_GET["id"],
          'nombreProducto'			=>	$_POST["hidden_nombre" . $_GET["id"]],
          'precioProducto'		=>	$_POST["hidden_precio" . $_GET["id"]],
          'cantidadProducto'		=>	$_POST["cantidad"],
          'imagenProducto'    =>  $_POST["hidden_imagen" . $_GET["id"]]
        );
        $_SESSION["carrito"][0] = $arregloProductos;
        
      }
      foreach($_SESSION["carrito"] as $keys => $values)
      {
        $total = $total + ($values["cantidadProducto"] * $values["precioProducto"]);
        $_SESSION["totalProducto". $values["idProducto"]] = $values["cantidadProducto"] * $values["precioProducto"];
        $_SESSION["precioTotal"] = $total;
        $_SESSION["cantidadProducto" . $values["idProducto"]] = $values["cantidadProducto"];
          
      }
      echo "<script>refrescarPrecio=true</script>";
    }

    CloseCon($abrirCon);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Productos</title>
    <?php include 'Resources/Sections/head.php';?> 
</head>
<body>
  <div id = "topBar">
      <?php include 'Resources/Sections/topBar.php';?> 
  </div>
  <div>
      <?php include 'Resources/Sections/menuBar.php';?> 
  </div>
  <?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
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
  <div class="card">
    <form method="post" action="producto.php?action=add&id=<?php echo $row["id"]; ?>">
      <img src="<?php echo $sourceImagen;?>" alt="<?php echo $nombreProducto ?>" title="<?php echo $nombreProducto ?>" style="width:100%">
      <h1><?php echo $nombreProducto ?></h1>
      <p class="price"><?php echo $precioProducto ?></p>
      <p><?php echo $descProducto ?></p>
      <input type="text" name="cantidad" value="1" class="form-control" />
      <input type="hidden" name="hidden_nombre<?php echo $row["id"]?>" value="<?php echo $row["nombre"];?>"/>
      <input type="hidden" name="hidden_precio<?php echo $row["id"]?>" value="<?php echo $row["precio_unitario"];?>" />
      <input type="hidden" name="hidden_imagen<?php echo $row["id"]?>" value="<?php echo $row["imagen"];?>" />
      <input type="submit" name="anadirCarrito" class="btn card-button" value="Añadir al Carrito" />
    </form>  
   </div>
   <?php
          }
        }
   ?>
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
</body>

</html>