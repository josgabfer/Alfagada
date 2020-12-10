<div class="header">
    <div class="container">
        <div class="header_logo">
            <a class="nav-brand" href="index.php">
                <img src="Resources/imgs/ALFAGADA.png" class="logo" alt>
            </a>
        </div>
        <div class="header_search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Buscar...">
                <span class="input-group-append">
                    <button class="btn search_btn" type="button" >
                        <i class="fas fa-search w3-medium" ></i>
                    </button>
                </span>
            </div>   
        </div>
        <div class="header_login">
            <ul>
                <?php
                    if (session_status() == PHP_SESSION_NONE) {
                        session_start();
                    }
                    if (empty($_SESSION["NombreUsuario"]))
                    {
                        echo "<li><a href='login.php'>Ingresar</a></li><li><a href='login.php'>&nbsp|&nbsp</a></li><li><a href='login.php'>Crear Cuenta</a></li>";
                    }
                    else
                    {
                        echo "<li><a href=''>" . $_SESSION["NombreUsuario"] ."&nbsp" . $_SESSION["ApellidoUsuario"] . "</a>";
                    }
                ?>
            </ul>
        </div>
        <div class="header_shop_cart">
            <div class="ss_right">
                <a href="carrito.php" class="cart_icon">
                    <span class="qut_counter">
                        <?php
                        if (isset($_SESSION["carrito"]))
                        {
                            echo count($_SESSION["carrito"]); 

                        } else 
                        {
                            echo "0";
                        }
                        ?></span>
                    <i class="fas fa-shopping-cart "></i>
                </a>
            </div>
            <div class="ss_cart_content">
                <strong>Mi Carrito</strong>
                <span>¢
                    <?php
                        if (isset($_SESSION["precioTotal"]))
                        {
                            echo $_SESSION["precioTotal"];

                        } else 
                        {
                            echo "0";
                        }
                        ?>
                </span></span>
            </div>
        </div>
    </div>
</div>

