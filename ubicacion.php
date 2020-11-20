<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="Resources/Styles/styles.css" media="all" type="text/css">
    <link rel="stylesheet" href="Resources/Styles/bootstrap.css">
    <link rel="stylesheet" href="Resources/Styles/bootstrap.min.css">
    <link rel="stylesheet" href="Resources/Styles/styles_top_bar.css" media="all" type="text/css">
    <link rel="stylesheet" href="Resources/Styles/styles_menu_bar.css" media="all" type="text/css">
    <link rel="stylesheet" href="Resources/Styles/slider.css" media="all" type="text/css">
    <link rel="stylesheet" href="Resources/Styles/footerStyles.css">
    <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css" type="text/css">
</head>
<body>
 <!-- Top Bar Section (Search)-->
 <div>
    <?php include 'Resources/Sections/topBar.php';?> 
</div>
<div>
    <?php include 'Resources/Sections/menuBar.php';?> 
</div>

<!--Contacto-->
<div class="ubicacion">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center">
                        <h2 class="contact_title">Ubicación</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb text-center">
                                <li class="breadcrumb-item">
                                    <a href="#index.php">
                                        <i class="fas fa-home"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item ">
                                    <a href="#contact.php">UBICACION</a>
                                </li>
                               
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
    <div class="mapa">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-left">
                        <h1>Ubicación</h1>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d982.2961907236005!2d-84.1401371708598!3d10.001591999553131!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTDCsDAwJzA1LjciTiA4NMKwMDgnMjIuNSJX!5e0!3m2!1ses-419!2scr!4v1605711233037!5m2!1ses-419!2scr" 
                                width="600" 
                                height="450" 
                                frameborder="0" 
                                style="border:0;" 
                                allowfullscreen="" 
                                aria-hidden="false" 
                                tabindex="0">
                            
                        </iframe>
                   </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<!-- Footer-->
<footer class="footer pt-1">
    <?php include('Resources/Sections/footer.php');?>
</footer>

<!--Script-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>