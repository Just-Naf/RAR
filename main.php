<?php
     include "koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/5ee07d89ce.js" crossorigin="anonymous"></script>
    <link rel="stylesheet"  type="text/css" href="style.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="index.js"></script>
    <title>Document</title>
</head>
<body>
    
<!--navbar dan slider-->
<section id="top-bar">
            <div class="container d-none d-md-block">
                <div class="d-flex bd-highlight">
                    <div class="p-lg-2 bd-highlight">
                        <span><i class="fa fa-phone mr-lg-2 ml-lg-2"></i> +91 9713950629</span>

                        <span><i class="fa fa-envelope mr-lg-2 ml-lg-2"></i>softbuzzinnovation@gmail.com</span>
                    </div>
                    <div class="ml-auto p-lg-2 bd-highlight social">
                        <span>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </span>
                        <span>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </span>
                        <span>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </span>
                        <span>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </span>
                    </div>
                </div>
            </div>
        </section>

        <header id="menu">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand ml-md-3" href="#">SoftBuzz</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars text-white"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nv nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nv nav-link" href="kita.php">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nv nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nv nav-link" href="#">Feature</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nv nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Services
                                </a>
                                <div class="dropdown-menu bg-sm-primary" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Installation Guide</a>
                                    <a class="dropdown-item" href="#">User Guide</a>
                                    <a class="dropdown-item" href="#">API Guide</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nv nav-link" href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <section class="slider-caption">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" id="myCarousel-indicators">
                    <li
                        data-target="#carouselExampleCaptions"
                        data-slide-to="0"
                        class="active"
                        style="background-image: url('img/slide2.jpg');"
                    ></li>
                    <li
                        data-target="#carouselExampleCaptions"
                        data-slide-to="1"
                        style="background-image: url('img/slide4.jpg');"
                    ></li>
                    <li data-target="#carouselExampleCaptions" 
                        data-slide-to="2" 
                        style="background-image: url('img/slide5.jpg');"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/slide2.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                            <h1 class="judul slide-in-bottom">Boat Excursions</h1>
                                            <p class="isi slide-in-bottom2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tristique nisl vitae luctus sollicitudin. Fusce consectetur sem eget dui tristique, ac posuere arcu varius.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="carousel-item">
                        <img src="img/slide4.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slide5.jpg" class="d-block w-100" alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </section>

</body>
</html>