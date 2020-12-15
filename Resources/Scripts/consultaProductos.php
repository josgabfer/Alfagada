<?php

  
    if (session_status() == PHP_SESSION_NONE) 
    {
      session_start();
    }

    $abrirCon = OpenCon();

    $consultarCategoria = "call ConsultarCategoria('$consulta')";
    $abrirCon -> next_result();
    $listaProductos = $abrirCon -> query($consultarCategoria);
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
            'imagenProducto'    =>  $_POST["hidden_imagen" . $_GET["id"]],
            'descProducto'      =>  $_POST["hidden_desc" . $_GET["id"]],
            'categoriaProducto'      =>  $_POST["hidden_categoria" . $_GET["id"]]

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
          'imagenProducto'    =>  $_POST["hidden_imagen" . $_GET["id"]],
          'descProducto'      =>  $_POST["hidden_desc" . $_GET["id"]],
          'categoriaProducto'      =>  $_POST["hidden_categoria" . $_GET["id"]]
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