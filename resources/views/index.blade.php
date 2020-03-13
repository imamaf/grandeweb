<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>index</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="z-index: 2;">
        <div class="container" style="max-width:900px;">
            <img src="img/logo.png" alt="#" style="width: 180px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('ourteam') }}">Our Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <div class="title-banner wow fadeInRightBig animated" data-wow-duration="3s">
                <h1>We Make Your Dream</h1>
                <p>Website Come True</p>
                <a href="#" class="btn btn-banner">Let's work together!</a>
            </div>
            <div class="service-banner">
                <h3>Our Service</h3>
            </div>
        </div>
    </div>

    <div class="container" style="max-width:900px;">
        <div class="img-banner">
            <div class="row">
                <div class="col-md-3">
                    <div class="feature-item set-bg" data-setbg="img/img-banner-1.png" style="background-image: url('img/img-banner-1.png');">
                        <h3>01</h3>
                        <div class="title wow fadeInDown" data-wow-duration="1s">
                            <h5>Company Profile</h5>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore 
                                magna aliquyam erat, sed diam voluptua. At vero
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-item set-bg" data-setbg="img/img-banner-2.png" style="background-image: url('img/img-banner-2.png');">
                        <h3>02</h3>
                        <div class="title">
                            <h5>Online Shop</h5>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore 
                                magna aliquyam erat, sed diam voluptua. At vero
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-item set-bg" data-setbg="img/img-banner-3.png" style="background-image: url('img/img-banner-3.png');">
                        <h3>03</h3>
                        <div class="title">
                            <h5>Personal Website</h5>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, 
                                sed diam nonumy eirmod tempor invidunt ut labore et dolore 
                                magna aliquyam erat, sed diam voluptua. At vero
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="feature-item set-bg" data-setbg="img/img-banner-3.png" style="background-image: url('img/img-banner-3.png');">
                            <!-- <h3>Personal Website</h3> -->
                    </div>
                </div>
            </div>
                <!-- <div class="row">
                    <div class="col-sm-3">
                        <div style="width: 100%">
                            <img src="img/img-banner-1.png"" alt="#" style="width: 100%">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div style="width: 100%">
                            <img src="img/img-banner-1.png"" alt="#" style="width: 100%">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div style="width: 100%">
                            <img src="img/img-banner-1.png"" alt="#" style="width: 100%">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div style="width: 100%">
                            <img src="img/img-banner-1.png"" alt="#" style="width: 100%">
                        </div>
                    </div>
                </div>   -->
        </div>
    </div>


    <div class="container" style="max-width: 900px;">
        <div class="row">
            <div class="col-md-6">
                <div class="about-us">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
                        invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam 
                        et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est 
                        Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed 
                        diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
                        At vero eos et accusam et justo duo dolores et ea rebum. Stet clita
                    </p>
                    <a href="#" class="btn btn-about">Let's work together!</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="image-about">
                    <img src="img/img-aboutus.png" alt="#">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-featured">
        <div class="container" style="max-width: 900px;">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center" style="margin-top:30px; color:#303030; margin-bottom: 30px;">Featured Project</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumb-wrapper">
                        <div class="img-box">
                            <img src="img/img-featured.png" class="img-responsive img-fluid" alt="">
                        </div>
                        <div class="thumb-content">
                            <span>PT. JOY BUSINESS INTERNATIONAL</span>
                            <p>Indonesia</p>
                            <a href="#">Visit Site <i class="fa fa-angle-right"></i></a>
                        </div>						
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumb-wrapper">
                        <div class="img-box">
                            <img src="img/img-featured.png" class="img-responsive img-fluid" alt="">
                        </div>
                        <div class="thumb-content">
                            <span>PT. JOY BUSINESS INTERNATIONAL</span>
                            <p>Indonesia</p>
                            <a href="#">Visit Site <i class="fa fa-angle-right"></i></a>
                        </div>						
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumb-wrapper">
                        <div class="img-box">
                            <img src="img/img-featured.png" class="img-responsive img-fluid" alt="">
                        </div>
                        <div class="thumb-content">
                            <span>PT. JOY BUSINESS INTERNATIONAL</span>
                            <p>Indonesia</p>
                            <a href="#">Visit Site <i class="fa fa-angle-right"></i></a>
                        </div>						
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumb-wrapper">
                        <div class="img-box">
                            <img src="img/img-featured.png" class="img-responsive img-fluid" alt="">
                        </div>
                        <div class="thumb-content">
                            <span>PT. JOY BUSINESS INTERNATIONAL</span>
                            <p>Indonesia</p>
                            <a href="#">Visit Site <i class="fa fa-angle-right"></i></a>
                        </div>						
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumb-wrapper">
                        <div class="img-box">
                            <img src="img/img-featured.png" class="img-responsive img-fluid" alt="">
                        </div>
                        <div class="thumb-content">
                            <span>PT. JOY BUSINESS INTERNATIONAL</span>
                            <p>Indonesia</p>
                            <a href="#">Visit Site <i class="fa fa-angle-right"></i></a>
                        </div>						
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="thumb-wrapper">
                        <div class="img-box">
                            <img src="img/img-featured.png" class="img-responsive img-fluid" alt="">
                        </div>
                        <div class="thumb-content">
                            <span>PT. JOY BUSINESS INTERNATIONAL</span>
                            <p>Indonesia</p>
                            <a href="#">Visit Site <i class="fa fa-angle-right"></i></a>
                        </div>						
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-testimonials">
        <div class="row">
            <div class="col-md-8 col-center m-auto">
                <div class="row">
                    <div class="col-md-12">
                        <div class="img-template">
                            <h2 class="text-center" style="margin-top:30px; color:#303030; margin-bottom: 30px;">Testimonials</h2>
                        </div>
                    </div>
                </div>
                <div id="testimoni" class="testimoni slide" data-ride="carousel">
                    <!-- Carousel indicators -->
                    <ol class="testimoni-indicators">
                        <li data-target="#testimoni" data-slide-to="0" class="active"></li>
                        <li data-target="#testimoni" data-slide-to="1"></li>
                        <li data-target="#testimoni" data-slide-to="2"></li>
                    </ol>   
                    <!-- Wrapper for carousel items -->
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <div class="img-box">
                                <img src="https://www.tutorialrepublic.com/examples/images/clients/3.jpg" alt="">
                            </div>
                            <p class="testimonial">" Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero "</p>
                            <i class="fas fa-quote-right"></i>
                            <p class="name">Rudi Lazuardi</p>
                            <p class="position">Komisaris Joybiz</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box">
                                <img src="https://www.tutorialrepublic.com/examples/images/clients/2.jpg" alt="">
                            </div>
                            <p class="testimonial">" Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero "</p>
                            <i class="fas fa-quote-right"></i>
                            <p class="name">Muhammad Ibnu</p>
                            <p class="position">Komisaris Joybiz</p>
                        </div>
                        <div class="item carousel-item">
                            <div class="img-box">
                                <img src="https://www.tutorialrepublic.com/examples/images/clients/1.jpg" alt="">
                            </div>
                            <p class="testimonial">" Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero "</p>
                            <i class="fas fa-quote-right"></i>
                            <p class="name">Gina Rizka</p>
                            <p class="position">Komisaris Joybiz</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-footer">
        <div class="container" style="max-width: 900px; margin-top: 20px;">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-img">
                        <img src="img/logo-putih.png" alt="">
                    </div>
                    <div class="footer-title">
                        <p>Click one of our contacts below to say hello.</p>
                    </div>
                    <div class="footer-medsos">
                        <p><i class="fab fa-instagram"></i> grande.web</p>
                        <p><i class="far fa-envelope"></i> grande.web@gmail.com</p>
                        <p><i class="fab fa-whatsapp"></i> +6281291898046</p>
                    </div>
                </div>
                <div class="col-md-6 center-text">
                    <div class="footer-center">
                        <p class="footer-links">
                            <a href="#">Project</a>
                            <a href="#">About Us</a>
                            <a href="#">Our Team</a>
                            <a href="#">Contact</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="instagram-photo">
        <div class="insta-item set-bg" data-setbg="img/img-banner-1.png" style="background-image: url('img/img-banner-1.png');">
            <div class="inside-text">
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/img-banner-2.png" style="background-image: url('img/img-banner-2.png');">
            <div class="inside-text">
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/img-banner-3.png" style="background-image: url('img/img-banner-3.png');">
            <div class="inside-text">
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
        <div class="insta-item set-bg" data-setbg="img/img-banner-4.png" style="background-image: url('img/img-banner-4.png');">
            <div class="inside-text">
                <h5><a href="#">colorlib_Collection</a></h5>
            </div>
        </div>
    </div> -->
        
            <!-- <div class="row">
                <div class="col-md-4">
                    <div class="feature-item set-bg" style="background-image: url('img/img-banner-1.png');">
                    <h3>Company Profile</h3>
                </div>
                <div class="col-md-4">
                    <div class="feature-item set-bg" style="background-image: url('img/img-banner-2.png');">
                    <h3>Online Shop</h3>
                </div>
                <div class="col-md-4">
                    <div class="feature-item set-bg" style="background-image: url('img/img-banner-3.png');">
                    <h3>Personal Website</h3>
                </div>
            </div>
        
    </div> -->
</body>
</html>

<script src="js/jquery-3.1.0.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript" src="js/owl.carousel.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://use.fontawesome.com/5c5f5e49d6.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>